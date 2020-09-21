<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRegisteredNotification extends Notification {

    public function __construct($user) {
        $this->user = $user;
        $this->url = env('APP_URL');
        
    }

    public function via($notifiable) {
        return ['mail'];
    }


    

    public function toMail($notifiable) {
        return (new MailMessage)
            ->success()
            ->subject('Merhaba!')
            ->line('Sayın '. $this->user->first_name.', sizi aramızda gördüğümüz için mutluyuz.')
            ->line('Demir Okulu içeriklerine ulaşmak için aşağıdaki linke tıklayarak giriş yapabilirsiniz.')
            ->action('www.demirokulu.com', $this->url.'/tr/giris-yap');
    }

}


