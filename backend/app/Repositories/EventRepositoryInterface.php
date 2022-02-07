<?php

namespace App\Repositories;

use App\Http\Dto\Event\CreateDto;
use App\Http\Dto\Event\UpdateDto;

interface EventRepositoryInterface {
    public function getAllEvents();
    public function getPublicEvents();
    public function createEvent(CreateDto $createDto);
    public function getCreatedEvents(int $userId);
    public function getJoinedEvents(int $userId);
    public function getAllParticipantEvents(int $userId);
    public function getPublicParticipantEvents(int $userId);
    public function updateEvent(UpdateDto $updateDto);
    public function deleteEvent(int $eventId);
    public function getEventDetail(int $eventId);
    public function getParticipantState(int $eventId, int $userId);
    public function getLimitEvent(int $userId);
}
