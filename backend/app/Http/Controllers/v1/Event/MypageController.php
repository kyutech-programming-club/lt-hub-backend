<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\Event\FindByUserIdRequest;
use App\Usecases\Event\MypageUsecase;
use App\Http\Dto\Event\FindByUserIdDto;
use Vinkla\Hashids\Facades\Hashids;

class MypageController extends Controller
{
    public function __invoke(FindByUserIdRequest $request, MypageUsecase $usecase)
    {
        $findByUserIdDto = new FindByIdUserDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'userId' => Hashids::decode($request->userId)[0]
        ]);

        $result = $usecase->execute($findByUserIdDto);
    }
}
