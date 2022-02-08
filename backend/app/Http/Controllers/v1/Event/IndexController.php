<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;
use App\Usecases\Event\IndexUsecase;
use App\Http\Requests\Event\GetListRequest;
use App\Http\Dto\Event\GetListDto;

class IndexController extends Controller
{
    public function __invoke(GetListRequest $request, IndexUsecase $usecase)
    {
        $getListDto = new GetListDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'page' => $request->page
        ]);

        $result = $usecase->index($getListDto);
    }
}
