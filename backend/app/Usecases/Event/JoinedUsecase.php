<?php

namespace App\Usecases\Event;

use App\Repositories\EventRepositoryInterface;
use App\Http\Dto\BaseDto;

class JoinedUsecase
{
    private EventRepositoryInterface $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function execute(BaseDto $dto)
    {
        /*
            getJoinedEvents
        */
    }
}
