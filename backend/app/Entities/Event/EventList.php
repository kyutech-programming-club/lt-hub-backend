<?php

namespace App\Entities\Event;

class EventList
{
    protected array $events;

    public function __construct(array $events)
    {
        $this->events = array_map(function ($event) {
            return new Movie((object) $event);
        }, $events);
    }

    public function getList()
    {
        return $this->events;
    }
}
