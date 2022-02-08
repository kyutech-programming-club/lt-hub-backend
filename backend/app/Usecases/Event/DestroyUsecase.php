<?php

namespace App\Usecases\Event;

use App\Repositories\EventRepositoryInterface;
use App\Http\Dto\Event\FindByIdDto;

class DestroyUsecase
{
    private EventRepositoryInterface $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function destroy(FindByIdDto $findByIdDto)
    {
        /*
            if accessUser == hostId
                deleteEvent
                deleteEventTalks
        */
    }
}
