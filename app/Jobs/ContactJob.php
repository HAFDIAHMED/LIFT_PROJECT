<?php

namespace App\Jobs;

use App\Contact;
use App\Mail\ContactEasy;
use App\Mail\ContactMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ContactJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $contact;

    /**
     * Create a new job instance.
     *
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \Mail::to($this->contact->email)->send(new ContactMail($this->contact));

        \Mail::to("info@easy-lift-go.com")->send(new ContactEasy($this->contact));

        // \Mail::to("info@easy-lift-go.com")->send(new ClientOrderDevis($event->devis));
    }
}
