<?php

namespace App\Http\Controllers\Web;

use App\Models\Entities\Page;
use Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Entities\User;

class AuthController extends WebController
{
    public function main($template, $name) {
        if (!env('MEMBERSHIP_ENABLE')) {
            abort(404);
        }

        // Get page
        $page = cache()->rememberForever('page_auth_'.$name.'_'.app()->getLocale(), function() use ($template) {
            return Page::whereTemplate($template)->firstOrFail();
        });
        view()->share('page', $page);

        // Set meta tags
        $page->setMetaTags();

        // Set localization url
        $this->setLocalizationURLS($page);

        // Breadcrumbs
        Breadcrumbs::for('web.'.app()->getLocale().'.auth.'.$name, function ($trail) use ($page) {
            $trail->parent('web.'.app()->getLocale().'.home');
            $trail->push($page->getTitle(), $page->getViewLink());
        });

        // Return custom or detail view
        return view($page->getTemplate());
    }

    /**
     * Register
     *
     * @return Response
     * @throws \Exception
     */
    public function register()
    {
        view()->share('showNavbar', true);

        return $this->main('Register', 'register');
    }

    /**
     * Login
     *
     * @return Response
     * @throws \Exception
     */
    public function login()
    {
        view()->share('showNavbar', true);

        return $this->main('Login', 'login');
    }

    /**
     * Forgot Password
     *
     * @return Response
     * @throws \Exception
     */
    public function forgotPassword()
    {
       
        return $this->main('ForgotPassword', 'forgot-password');
    }

    /**
     * Password Reset
     *
     * @return Response
     * @throws \Exception
     */
    public function passwordReset()
    {
        return $this->main('PasswordReset', 'password-reset');
    }

    /**
     * Verify Email
     *
     * @return Response
     * @throws \Exception
     */
    public function verifyEmail()
    {
        return $this->main('VerifyEmail', 'verify-email');
    }

    /**
     * Verified Email
     *
     * @return Response
     * @throws \Exception
     */
    public function verifiedEmail()
    {
        return $this->main('VerifiedEmail', 'verified-email');
    }

    /**
     * Profile
     *
     * @return Response
     * @throws \Exception
     */
    public function profile()
    {
        return $this->main('Profile', 'profile');
    }

    /**
     * Missing Permission
     *
     * @return Response
     * @throws \Exception
     */
    public function missingPermission()
    {
        return $this->main('MissingPermission', 'missing-permission');
    }

     /**
     * Missing Permission
     *
     * @return Response
     * @throws \Exception
     */
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Üyeliğiniz Silindi.',
        ]);
    }

    /**
     * ProfilePost
     *
     * @param Request $request
     * @return void
     */
    public function profilePost(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name_surname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'password' => 'required_with:change_password,1|nullable|min:8|confirmed',
            'phone' => 'required',
            'corporate' => 'required',
        ], [], [
            'name_surname' => 'AD SOYAD',
            'email' => 'E-POSTA',
            'password' => 'PAROLA',
            'phone' => 'TELEFON',
            'corporate' => 'FİRMA ÜNVANI',
        ]);

        // Split first name and last name from name_surname field
        $user->first_name = split_name($request->get('name_surname'))[0];
        $user->last_name = split_name($request->get('name_surname'))[1];

        // Update password
        if ($request->get('change_password')) {
            $user->password = bcrypt($request->get('password'));
        }

        // Update all fields except password
        $user->update($request->except('password'));

        return response()->json([
            'success' => true,
            'message' => 'Bilgileriniz başarıyla güncellendi.',
        ]);
    }
}
