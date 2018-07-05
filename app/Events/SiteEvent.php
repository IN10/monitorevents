<?php

namespace App\Events;

use App\Http\Resources\Website as WebsiteResource;
use App\Website;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SiteEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $title;
    public $description;
    public $level;

    public function __construct(string $title, string $description, int $level = 4)
    {
        $this->title = $title;
        $this->description = $description;
        $this->level = $level;

        if ($level > 4 || $level < 1) {
            throw new \DomainException('Level invalid: must be between 1 and 4 inclusive');
        }
    }

    public function broadcastOn()
    {
        return new Channel('events');
    }
}
