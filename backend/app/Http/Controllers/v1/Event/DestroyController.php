<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use App\Usecases\EventUsecase;
use Illuminate\Http\Request;
use App\Http\Dtos\Event\FindByIdDto;
use Vinkla\Hashids\Facades\Hashids;

class DestroyController extends Controller
{
    public function __invoke(Request $request, string $eventId, EventUsecase $usecase)
    {
        $findByIdDto = new FindByIdDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'eventId' => Hashids::decode($eventId)[0]
        ]);

        $result = $this->eventUsecase->destroy($findByIdDto);
    }
}
