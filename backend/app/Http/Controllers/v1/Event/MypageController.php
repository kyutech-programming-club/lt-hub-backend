<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\Event\FindByUserIdRequest;
use App\Usecases\EventUsecase;
use App\Http\Dto\Event\FindByUserIdDto;
use Vinkla\Hashids\Facades\Hashids;

class MypageController extends Controller
{
    public function __invoke(FindByUserIdRequest $request, EventUsecase $usecase)
    {
        $findByUserIdDto = new FindByIdUserDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'userId' => Hashids::decode($request->userId)[0]
        ]);

        $result = $usecase->mypage($findByUserIdDto);
    }
}