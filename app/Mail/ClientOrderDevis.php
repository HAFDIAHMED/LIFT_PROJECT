<?php

namespace App\Mail;

use App\Devis;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientOrderDevis extends Mailable
{
    use Queueable, SerializesModels;

    public $devis;

    /**
     * Create a new message instance.
     *
     * @param Devis $devis
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
        $APP_NAME = config("app.name");
        return $this->markdown('mail.client_order_devis')
            ->subject("New lead $APP_NAME")
            ->attach(public_path() . "/storage/{$this->devis->devis_path}", [
                "mime" => "application/pdf"
            ]);
    }
}
