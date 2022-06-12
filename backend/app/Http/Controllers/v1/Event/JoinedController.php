<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use App\Usecases\EventUsecase;
use Illuminate\Http\Request;
use App\Http\Dtos\BaseDto;

class JoinedController extends Controller
{
    public function __invoke(Request $request, EventUsecase $usecase)
    {
        $dto = new BaseDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole
        ]);

        $result = $this->eventUsecase->joined($dto);
    }
}
