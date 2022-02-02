<?php

namespace App\Entities\Event;

use App\Entities\User\User;

class Event
{
    protected int $eventId;
    protected string $title;
    protected string $description;
    protected string $startTime;
    protected string $endTime;
    protected string $location;
    protected string $state;
    protected User $host;
    protected array $participants;

    public function __construct(object $obj)
    {
        if(isset($obj->id)) $this->eventId = $obj->id;
        if(isset($obj->title)) $this->title = $obj->title;
        if(isset($obj->description)) $this->description = $obj->description;
        if(isset($obj->start_time)) $this->startTime = $obj->start_time;
        if(isset($obj->end_time)) $this->endTime = $obj->end_time;
        if(isset($obj->location)) $this->location = $obj->location;
        if(isset($obj->state)) $this->state = $obj->state;
        if(isset($obj->user)) $this->host = new User((object) $obj->user);
        if(isset($obj->participants)) $this->participants = array_map(function ($participant) {
          return new User((object) $participant);
        }, $obj->$participants);
    }

    public function getId()
    {
        return $this->eventId;
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

    public function getHost()
    {
        return $this->host;
    }

    public function getParticipants()
    {
        return $this->participants;
    }
}
