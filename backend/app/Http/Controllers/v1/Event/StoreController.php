<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use App\Usecases\Event\StoreUsecase;
use App\Http\Requests\Event\CreateRequest;
use App\Http\Dto\Event\CreateDto;

class StoreController extends Controller
{
    public function __invoke(CreateRequest $request, StoreUsecase $usecase)
    {
        $createDto = new CreateDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'title' => $request->title,
            'description' => $request->description,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'location' => $request->location,
            'state' => $request->state
        ]);

        $result = $usecase->store($createDto);
    }
}
