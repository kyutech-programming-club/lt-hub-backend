<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use App\Http\Dtos\Event\UpdateDto;
use App\Http\Requests\Event\UpdateRequest;
use App\Usecases\Event\UpdateUsecase;
use Vinkla\Hashids\Facades\Hashids;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, string $eventId, UpdateUsecase $usecase)
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

        $result = $usecase->execute($updateDto);
    }
}
