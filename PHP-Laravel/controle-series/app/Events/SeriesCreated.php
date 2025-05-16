<?php

namespace App\Events;

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Queue\SerializesModels;

class SeriesCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public string $seriesName,
        public int $seriesId,
        public int $seriesSeasonsQty,
        public int $episodiosPorTemporada
    ) {
    }

    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
