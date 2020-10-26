<?php

namespace App\Jobs;

use App\Country;
use App\Devis;
use App\Events\DevisEvent;
use App\Mail\ClientOrderDevis;
use App\Mail\DevisMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DevisJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $devis;

    /**
     * Create a new job instance.
     *
     * @param Devis $devis
     */
    public function __construct(Devis $devis)
    {
        $this->devis = $devis;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        event(new DevisEvent($this->devis));
    }
}
