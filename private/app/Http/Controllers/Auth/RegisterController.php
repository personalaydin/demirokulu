<?php

namespace App\Http\Controllers\Auth;

use App\Models\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\UserRegisteredNotification;
use Illuminate\Auth\Events\Registered;
use Response;
use Helpers\Page as PageHelper;
use App\Models\Entities\Subscriber;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Override redirecto propery
     *
     * @return void
     */
    public function redirectTo()
    {
        // return env('APP_ADMIN_PREFIX');
        // if (auth()->user()->hasRole(['root', 'admin'])) {
        //     return env('APP_ADMIN_PREFIX');
        // } else {
        //     return route('web.tr.home');
        // }
        return env('APP_ADMIN_PREFIX');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'institution' => 'required',
            'major' => 'required',

        ], [], [
            'first_name' => 'AD',
            'last_name' => 'SOYAD',
            'email' => 'E-POSTA',
            'password' => 'PAROLA',
            'phone' => 'TELEFON',
            'city' => 'ŞEHİR',
            'institution' => 'HASTANE / ECZANE',
            'major' => 'BRANŞ',
        ]);
    }
    
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        // $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        if (isset($data['subscription']) && $data['subscription'] == 'on' ){
            $_subscription=1;

            $isExist = Subscriber::where('email', $data['email'])->first();
            if (!isset($isExist))
                Subscriber::create($data);
                

        } else {
            $_subscription=0;
        }

        if ($data['information_text'] == 'on'){
            $_information_text=1;
        } else {
            $_information_text=0;
        }

        
        if (! $data['hospitals'] == null ) {
            $_institution=$data['hospitals'];            
        } else {
            $_institution=$data['institution'];
        }

        

        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'city' => $data['city'],
            'phone' => $data['phone'],
            'institution' => $_institution,
            'major' => $data['major'],
            'subscription' => $_subscription,
            'information_text' => $_information_text,
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * The user has been registered.
     *
     * @param Request $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        
        $user->notify(new UserRegisteredNotification($user));
       
        $request->session()->flash('registered', 'Üyelik talebiniz alındı');
     
        return [
            'success' => true, 
            'message' => 'Üyelik talebiniz alındı',
            'redirect' => env("APP_URL").'/tr/giris-yap'
        ];
        return redirect()->route('web.tr.login-page', array('success' => true, 'message' => 'Üyelik talebiniz alındı'));
        
    }

    function getPageByTemplate($template)
    {
        if (config('pages_'.app()->getLocale())) {
            return config('pages_'.app()->getLocale())->where('template', $template)->first();
        }
    }
}
