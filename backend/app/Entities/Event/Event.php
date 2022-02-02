<?php

namespace App\Entities\Event;

class Event
{
    protected int $id;
    protected string $title;
    protected string $description;
    protected string $startTime;
    protected string $endTime;
    protected string $location;
    protected string $state;

    public function __construct(object $eventd)
    {
        if(isset($event->id)) $this->id = $event->id;
        if(isset($event->title)) $this->title = $event->title;
        if(isset($event->description)) $this->description = $event->description;
        if(isset($event->start_time)) $this->startTime = $event->start_time;
        if(isset($event->end_time)) $this->endTime = $event->end_time;
        if(isset($event->location)) $this->location = $event->location;
        if(isset($event->state)) $this->state = $event->state;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getState()
    {
        return $this->state;
    }
}
