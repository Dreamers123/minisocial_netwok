<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AdminPasswordNotify extends Notification
{
    use Queueable;


    public function __construct()
    {
        //
    }


    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
                        ->line('You are receiving this email because we received a password reset request for your account.')
                        ->action('Admin Reset Password', route('admin.password.reset', $this->token))
                        ->line('If you did not request a password reset, no further action is required.');
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
