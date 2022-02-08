<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Usecases\Event\ShowUsecase;
use App\Http\Dto\Event\FindByIdDto;
use Vinkla\Hashids\Facades\Hashids;

class ShowController extends Controller
{
    public function __invoke(Request $request, string $eventId, ShowUsecase $usecase)
    {
        $findByIdDto = new FindByIdDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'eventId' => Hashids::decode($eventId)[0]
        ]);

        $result = $usecase->execute($findById);
    }
}
