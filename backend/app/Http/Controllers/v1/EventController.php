<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Usecases\EventUsecaseInterface;
use Illuminate\Http\Request;
use App\Http\Requests\Event\CreateRequest;
use App\Http\Requests\Event\UpdateRequest;
use App\Http\Requests\Event\FindByUserIdRequest;
use App\Http\Requests\Event\GetListRequest;

class EventController extends Controller
{
    private EventUsecaseInterface $eventUsecase;

    public function __construct(EventUsecaseInterface $eventUsecase)
    {
        $this->eventUsecase = $eventUsecase;
    }

    public function index(GetListRequest $request)
    {
        // code
    }

    public function store(CreateRequest $request)
    {
        // code
    }

    public function created(Request $request)
    {
        // code
    }

    public function joined(Request $request)
    {
        // code
    }

    public function mypage(FindByUserIdRequest $request)
    {
        // code
    }

    public function show(Request $request, string $eventId)
    {
        // code
    }

    public function update(UpdateRequest $request, string $eventId)
    {
        // code
    }

    public function destroy(Request $request, string $eventId)
    {
        // code
    }

    public function detail(Request $request, string $eventId)
    {
        // code
    }
}
