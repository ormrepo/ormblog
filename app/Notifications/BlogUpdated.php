<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use NotificationChannels\OneSignal\OneSignalChannel;
use NotificationChannels\OneSignal\OneSignalMessage;
use NotificationChannels\OneSignal\OneSignalWebButton;
use Illuminate\Notifications\Notification;

/**
 * Class BlogUpdated
 * @package App\Notifications
 */
class BlogUpdated extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @param $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [OneSignalChannel::class];
    }


    /**
     * @param $notifiable
     * @return $this
     */
    public function toOneSignal($notifiable)
    {
        return OneSignalMessage::create()
            ->subject("Your {$notifiable->service} post was updated!")
            ->body("Click here to see details.")
            ->url('https://ormrepo.co.uk')
            ->webButton(
                OneSignalWebButton::create('link-1')
                    ->text('Click here')
                    ->icon('https://ormrepo.co.uk/images/ormrepo-tiny.png')
                    ->url('http://ormrepo.co.uk')
            );
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'user_id' => $this->user->id,
            'name' => $this->user->name,
            'username' => $this->user->username,
            'email' =>$this->user->email
        ];
    }
}
