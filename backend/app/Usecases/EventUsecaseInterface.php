<?php

namespace App\Usecases;

use App\Http\Dtos\BaseDto;
use App\Http\Dtos\Event\CreateDto;
use App\Http\Dtos\Event\FindByDto;
use App\Http\Dtos\Event\FindByUserIdDto;
use App\Http\Dtos\Event\GetListDto;
use App\Http\Dtos\Event\UpdateDto;

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
