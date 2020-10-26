<?php

namespace App\Mail;

use App\Devis;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class DevisMail extends Mailable
{
    use Queueable, SerializesModels;

    public $devis;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Devis $devis)
    {
        $this->devis = $devis;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /*return $this->markdown('mail.devis_mail')
            ->attach($this->devisFile,[
                "as"=>$this->devis->devis_path.".pdf",
                "mime"=>"application/pdf"
            ]);*/
        return $this->markdown('mail.devis_mail')
            ->subject("Votre devis est disponible")
            ->attach(public_path()."/storage/{$this->devis->devis_path}",[
                "mime"=>"application/pdf"
            ])
            ->attach(public_path()."/Documentation Easy-Lift.pdf",[
                "mime"=>"application/pdf"
            ]);
    }
}
