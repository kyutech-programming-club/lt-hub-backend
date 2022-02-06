<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Usecases\EventUsecaseInterface;
use Illuminate\Http\Request;
use App\Http\Requests\Event\CreateRequest;
use App\Http\Requests\Event\UpdateRequest;
use App\Http\Requests\Event\FindByUserIdRequest;
use App\Http\Requests\Event\GetListRequest;
use App\Http\Dto\BaseDto;
use App\Http\Dto\Event\GetListDto;
use App\Http\Dto\Event\CreateDto;
use App\Http\Dto\Event\FindByIdDto;
use App\Http\Dto\Event\FindByUserIdDto;
use App\Http\Dto\Event\UpdateDto;
use Vinkla\Hashids\Facades\Hashids;

class EventController extends Controller
{
    private EventUsecaseInterface $eventUsecase;

    public function __construct(EventUsecaseInterface $eventUsecase)
    {
        $this->eventUsecase = $eventUsecase;
    }

    public function index(GetListRequest $request)
    {
        $getListDto = new GetListDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'page' => $request->page
        ]);

        $result = $this->eventUsecase->index($getListDto);
    }

    public function store(CreateRequest $request)
    {
        $createDto = new CreateDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'title' => $request->title,
            'description' => $request->description,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'location' => $request->location,
            'state' => $request->state
        ]);

        $result = $this->eventUsecase->store($createDto);
    }

    public function created(Request $request)
    {
        $dto = new BaseDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole
        ]);

        $result = $this->eventUsecase->created($dto);
    }

    public function joined(Request $request)
    {
        $dto = new BaseDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole
        ]);

        $result = $this->eventUsecase->joined($dto);
    }

    public function mypage(FindByUserIdRequest $request)
    {
        $findByUserIdDto = new FindByIdUserDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'userId' => Hashids::decode($request->userId)[0]
        ]);

        $result = $this->eventUsecase->mypage($findByUserIdDto);
    }

    public function show(Request $request, string $eventId)
    {
        $findByIdDto = new FindByIdDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'eventId' => Hashids::decode($eventId)[0]
        ]);

        $result = $this->eventUsecase->show($findById);
    }

    public function update(UpdateRequest $request, string $eventId)
    {
        $updateDto = new UpdateDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'eventId' => Hashids::decode($eventId)[0],
            'description' => $request->description,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'location' => $request->location,
            'state' => $request->state
        ]);

        $result = $this->eventUsecase->update($updateDto);
    }

    public function destroy(Request $request, string $eventId)
    {
        $findByIdDto = new FindByIdDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'eventId' => Hashids::decode($eventId)[0]
        ]);

        $result = $this->eventUsecase->destroy($findByIdDto);
    }

    public function detail(Request $request, string $eventId)
    {
        $findByIdDto = new FindByIdDto([
            'accessUserId' => $request->accessUserId,
            'accessUserRole' => $request->accessUserRole,
            'eventId' => Hashids::decode($eventId)[0]
        ]);

        $result = $this->eventUsecase->detail($findByIdDto);
    }
}
