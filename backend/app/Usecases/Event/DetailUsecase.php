<?php

namespace App\Usecases\Event;

use App\Repositories\EventRepositoryInterface;
use App\Http\Dto\Event\FindByIdDto;

class DetailUsecase
{
    private EventRepositoryInterface $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function execute(FindByIdDto $findByIdDto)
    {
        /*
            if role == 1
                getEventDetail
            else
                getParticipantState
                if (state == ok)
                    getEventDetail
                else
                    getLimitEvent
        */
    }
}
