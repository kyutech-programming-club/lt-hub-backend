<?php

namespace App\Usecases\Event;

use App\Repositories\EventRepositoryInterface;
use App\Http\Dto\Event\GetListDto;

class IndexUsecase
{
    private EventRepositoryInterface $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function execute(GetListDto $getListDto)
    {
        /*
            if accessUserRole == 0
                getAllEvent
            else
                getAllPublicEvent & getParticipantLimitEvent
        */
    }
}
