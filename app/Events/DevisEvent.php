<?php

namespace App\Events;

use App\Devis;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DevisEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $devis;

    /**
     * Create a new event instance.
     *
     * @param Devis $devis
     */
    public function __construct(Devis $devis)
    {
        $this->devis = $devis;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
