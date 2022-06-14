<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Dtos\Event\FindByIdDto;
use App\Usecases\Event\DetailUsecase;
use Vinkla\Hashids\Facades\Hashids;

class DetailController extends Controller
{
    public function __invoke(Request $request, string $eventId, DetailUsecase $usecase)
    {
        $findByIdDto = new FindByIdDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'eventId' => Hashids::decode($eventId)[0]
        ]);

        $result = $usecase->execute($findByIdDto);
    }
}
