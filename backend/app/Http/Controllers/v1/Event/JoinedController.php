<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Dtos\BaseDto;
use App\Usecases\Event\JoinedUsecase;

class JoinedController extends Controller
{
    public function __invoke(Request $request, JoinedUsecase $usecase)
    {
        $dto = new BaseDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole
        ]);

        $result = $usecase->execute($dto);
    }
}
