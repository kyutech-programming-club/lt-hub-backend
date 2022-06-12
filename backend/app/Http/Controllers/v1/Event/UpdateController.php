<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use App\Usecases\EventUsecase;
use App\Http\Requests\Event\UpdateRequest;
use App\Http\Dtos\Event\UpdateDto;
use Vinkla\Hashids\Facades\Hashids;

class MypageController extends Controller
{
    public function __invoke(UpdateRequest $request, string $eventId, EventUsecase $usecase)
    {
        $updateDto = new UpdateDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'eventId' => Hashids::decode($eventId)[0],
            'description' => $request->description,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'location' => $request->location,
            'state' => $request->state
        ]);

        $result = $this->eventUsecase->update($updateDto);
    }
}
