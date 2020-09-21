<?php

namespace App\Http\Controllers\Auth;

use App\Models\Entities\Page;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function redirectTo()
    // {
    //     if (auth()->user()->hasRole(['root', 'admin'])) {
    //         return env('APP_ADMIN_PREFIX');
    //     } else {
    //         return route('web.tr.home');
    //     }

        
    // }
    public function redirectTo()
    {


        if (auth()->user()->hasRole(['root', 'admin'])) {
            return env('APP_ADMIN_PREFIX');
        } 

        if (auth()->user()->hasRole(['member'])) {
            $libraryPage = cache()->rememberForever('page_library_'.app()->getLocale(), function() {
                return Page::whereTemplate('Library')->firstOrFail();
            });

            return $libraryPage->getViewLink();
        }

        return route('web.'.app()->getLocale().'.home');
    }
}
