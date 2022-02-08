<?php

namespace App\Usecases\Event;

use App\Repositories\EventRepositoryInterface;

class MypageUsecase
{
    private EventRepositoryInterface $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function execute(FindByUserIdDto $findByUserIdDto)
    {
        /*
            if role == 0
                getAllUserPaticipantEvent(userId)
            else
                getPublicUserParticipantEvent
        */
    }
}
