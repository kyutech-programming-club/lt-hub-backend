<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Usecases\EventUsecase;
use App\Http\Dto\BaseDto;

class JoinedController extends Controller
{
    public function __invoke(Request $request, EventUsecase $usecase)
    {
        $dto = new BaseDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole
        ]);

        $result = $usecase->joined($dto);
    }
}
