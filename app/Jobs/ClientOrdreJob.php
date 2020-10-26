<?php

namespace App\Jobs;

use App\Devis;
use App\Mail\ClientOrderDevis;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ClientOrdreJob implements ShouldQueue
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
    }
}
