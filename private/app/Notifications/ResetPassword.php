<?php
namespace App\Notifications;

use App\Models\Entities\Page;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class ResetPassword extends ResetPasswordNotification
{
    use Queueable;

    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }

        $passwordResetPage = cache()->rememberForever('page_password_reset_'.app()->getLocale(), function() {
            return Page::whereTemplate('PasswordReset')->firstOrFail();
        });

        $resetURL = $passwordResetPage->getViewLink().'?token='.$this->token.'&email='.$notifiable->getEmailForPasswordReset();

        if ($notifiable->hasRole(['root', 'admin'])) {
            $resetURL = url(config('app.url').route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()], false));
        }

        return (new MailMessage)
            ->subject(config('app.name') . ' - ' . Lang::get('Reset Password Notification'))
            ->line(Lang::get('You are receiving this email because we received a password reset request for your account.'))
            ->action(Lang::get('Reset Password'), $resetURL)
            ->line(Lang::get('This password reset link will expire in :count minutes.', ['count' => config('auth.passwords.users.expire')]))
            ->line(Lang::get('If you did not request a password reset, no further action is required.'));
    }
}