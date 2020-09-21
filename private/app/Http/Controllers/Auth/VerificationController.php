<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Entities\Page;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Show the email verification notice.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function show(Request $request)
    {
        $verifyEmailPage = cache()->rememberForever('page_verifiy_email_'.app()->getLocale(), function() {
            return Page::whereTemplate('VerifyEmail')->firstOrFail();
        });

        return $request->user()->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : redirect($verifyEmailPage->getViewLink());
    }

    /**
     * Override redirecto property
     *
     * @return void
     * @throws \Exception
     */
    public function redirectTo()
    {
        $verifiedEmailPage = cache()->rememberForever('page_verified_email_'.app()->getLocale(), function() {
            return Page::whereTemplate('VerifiedEmail')->firstOrFail();
        });

        return $verifiedEmailPage->getViewLink();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}