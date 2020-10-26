<?php

namespace App\Listeners;

use App\Events\DevisEvent;
use App\Jobs\ClientOrdreJob;
use App\Mail\ClientOrderDevis;
use App\Mail\DevisMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DevisEventHandler implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  DevisEvent  $event
     * @return void
     */
    public function handle(DevisEvent $event)
    {

        \Mail::to($event->devis->email)->send(new DevisMail($event->devis));
        \Mail::to("info@easy-lift-go.com")->send(new ClientOrderDevis($event->devis));
    }
}
