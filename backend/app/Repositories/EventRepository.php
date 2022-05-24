<?php

namespace App\Repositories;

use App\Http\Dtos\Event\CreateDto;
use App\Http\Dtos\Event\UpdateDto;

class EventRepository implements EventRepositoryInterface
{
    public function getAllEvents()
    {
        //
    }

    public function getBrowsableEvents(int $userId)
    {
        //
    }

    public function createEvent(CreateDto $createDto)
    {
        //
    }

    public function getCreatedEvents(int $userId)
    {
        //
    }

    public function getJoinedEvents(int $userId)
    {
        //
    }

    public function getAllParticipantEvents(int $userId)
    {
        //
    }

    public function getBrowsableParticipantEvents(int $userId)
    {
        //
    }

    public function updateEvent(UpdateDto $updateDto)
    {
        //
    }

    public function deleteEvent(int $eventId)
    {
        //
    }

    public function getEventDetail(int $eventId)
    {
        //
    }

    public function getParticipantState(int $eventId, int $userId)
    {
        //
    }

    public function getLimitEvent(int $userId)
    {
        //
    }
}
