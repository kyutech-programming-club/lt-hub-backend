<?php

namespace App\Http\Controllers\v1\Event;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke(GetListRequest $request)
    {
        $getListDto = new GetListDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'page' => $request->page
        ]);

        $result = $this->eventUsecase->index($getListDto);
    }
}