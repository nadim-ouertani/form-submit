<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserSubscribe extends Mailable
{
    use Queueable, SerializesModels;
    private $subscriber;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.subscriber')->with([
            'name' => $this->subscriber['full_name'],
            'email' => $this->subscriber['email'],
            'follow' => $this->subscriber['follow'],
            'ip' => $this->subscriber['ip'],
            'country' => $this->subscriber['country'],
        ]);
    }
}
