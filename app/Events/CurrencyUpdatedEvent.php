<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Client\Response;
use Illuminate\Queue\SerializesModels;

class CurrencyUpdatedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $res = [];

    /**
     * Create a new event instance.
     * CurrencyUpdatedEvent constructor.
     * @param array $res
     */
    public function __construct(array $res)
    {
        $this->res = $res;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('public.currency.1');
    }

    public function broadcastAs()
    {
        return 'currency.updated';
    }

    public function broadcastWith()
    {
        return [
            'message' => $this->res
        ];
    }

}
