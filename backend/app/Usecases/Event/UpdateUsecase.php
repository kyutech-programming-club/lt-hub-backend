<?php

namespace App\Usecases\Event;

use App\Repositories\EventRepositoryInterface;
use App\Http\Dto\Event\UpdateDto;

class UpdateUsecase
{
    private EventRepositoryInterface $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function execute(UpdateDto $updateDto)
    {
        /*
            if accessUser == hostId
                UpdateEvent
        */
    }
}
