<?php

namespace App\Notifications;

use App\Models\JoinUs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyAdminOfNewJoinRequest extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public JoinUs $joinUs)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting("Hello Admin,")
                    ->line("{$this->joinUs->name} just filled the join us name form")
                    ->line("below are the information filled")
                    ->line("Email: {$this->joinUs->email}")
                    ->line("Phone: {$this->joinUs->phone}")
                    ->line("Message: {$this->joinUs->text}")
                    ->action('Visit Dashboard', url('/login'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
