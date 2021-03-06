<?php

namespace App\Notifications;

use App\Models\File;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class statedocumentaprove extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }
    public function toDatabase( ){
        return[
            'name'=>auth()->user()->name,
            'MSG'=> 'Aprobo el documento',
        ];
    }
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $abc=auth()->user()->name;
        return (new MailMessage)
                    ->subject('Se ha evaluado un documento')
                    ->greeting('Notilog')    
                    ->line('El estado del documento ha sido cambiado por:', $abc)
                    ->line($abc)
                    ->action('Ver documentos', url('/home'));
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
            //
        ];
    }
}
