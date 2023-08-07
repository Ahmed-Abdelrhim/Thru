<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class CarGetOutEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $averageServedTimeForCar;
    public function __construct($averageServedTimeForCar)
    {
        $this->averageServedTimeForCar = $averageServedTimeForCar;
    }

    public function broadcastOn(): array
    {
        return ['car-get-out-channel'];
    }

    public function broadcastAs(): string
    {
        return 'carOut';
    }
}
