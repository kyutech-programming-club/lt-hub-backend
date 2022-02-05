<?php

namespace App\Usecases\v1;

use App\Http\Dto\BaseDto;
use App\Http\Dto\Event\CreateDto;
use App\Http\Dto\Event\FindByDto;
use App\Http\Dto\Event\FindByUserIdDto;
use App\Http\Dto\Event\GetListDto;
use App\Http\Dto\Event\UpdateDto;

interface EventUsecaseInterface
{
    public function index(GetListDto $getListDto);
    public function store(CreateDto $createDto);
    public function created(BaseDto $dto);
    public function joined(BaseDto $dto);
    public function mypage(FindByUserIdDto $findByUserIdDto);
    public function show(FindByIdDto $findByIdDto);
    public function update(UpdateDto $updateDto);
    public function destroy(FindByIdDto $findByIdDto);
    public function detail(FindByIdDto $findByIdDto);
}
