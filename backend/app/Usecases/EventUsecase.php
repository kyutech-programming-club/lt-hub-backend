<?php

namespace App\Usecases;

use App\Http\Dtos\BaseDto;
use App\Http\Dtos\Event\CreateDto;
use App\Http\Dtos\Event\FindByDto;
use App\Http\Dtos\Event\FindByUserIdDto;
use App\Http\Dtos\Event\GetListDto;
use App\Http\Dtos\Event\UpdateDto;

class EventUsecase implements EventUsecaseInterface
{
    public function index(GetListDto $getListDto)
    {
        /*
            if accessUserRole == 0
                getAllEvent
            else
                getAllPublicEvent & getParticipantLimitEvent
        */
    }

    public function store(CreateDto $createDto)
    {
        /*
            createEvent
        */
    }

    public function created(BaseDto $dto)
    {
        /*
            getCreatedEvents
        */
    }

    public function joined(BaseDto $dto)
    {
        /*
            getJoinedEvents
        */
    }

    public function mypage(FindByUserIdDto $findByUserIdDto)
    {
        /*
            if role == 0
                getAllUserPaticipantEvent(userId)
            else
                getPublicUserParticipantEvent
        */
    }

    public function show(FindByIdDto $findByIdDto)
    {
        /*
            // 保留
        */
    }

    public function update(UpdateDto $updateDto)
    {
        /*
            if accessUser == hostId
                UpdateEvent
        */
    }

    public function destroy(FindByIdDto $findByIdDto)
    {
        /*
            if accessUser == hostId
                deleteEvent
                deleteEventTalks
        */
    }

    public function detail(FindByIdDto $findByIdDto)
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
