<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Dtos\BaseDto;
use App\Usecases\Event\CreatedUsecase;

class CreatedController extends Controller
{
    public function __invoke(Request $request, CreatedUsecase $usecase)
    {
        $dto = new BaseDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole
        ]);

        $result = $this->eventUsecase->created($dto);
    }
}
