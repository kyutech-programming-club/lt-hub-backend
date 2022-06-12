<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use App\Http\Dtos\Event\FindByIdDto;
use Illuminate\Http\Request;
use App\Usecases\Event\DestroyUsecase;
use Vinkla\Hashids\Facades\Hashids;

class DestroyController extends Controller
{
    public function __invoke(Request $request, string $eventId, DestroyUsecase $usecase)
    {
        $findByIdDto = new FindByIdDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'eventId' => Hashids::decode($eventId)[0]
        ]);

        $result = $usecase->execute($findByIdDto);
    }
}
