<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Usecases\EventUsecase;
use App\Http\Dto\Event\FindByIdDto;
use Vinkla\Hashids\Facades\Hashids;

class DetailController extends Controller
{
    public function detail(Request $request, string $eventId, EventUsecase $usecase)
    {
        $findByIdDto = new FindByIdDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'eventId' => Hashids::decode($eventId)[0]
        ]);

        $result = $usecase->detail($findByIdDto);
    }
}
