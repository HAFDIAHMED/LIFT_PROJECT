<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeSignUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    /**
     * Create a new message instance.
     * @param User $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('mail.welcome')
            ->subject("Votre compte a été confirmé")
            ->attach(public_path()."/Documentation Easy-Lift.pdf",[
                "mime"=>"application/pdf"
            ]);
    }
}
