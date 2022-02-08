<?php

namespace App\Usecases\Event;

use App\Repositories\EventRepositoryInterface;
use App\Http\Dto\Event\CreateDto;

class StoreUsecase
{
    private EventRepositoryInterface $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function execute(CreateDto $createDto)
    {
        /*
            createEvent
        */
    }
}