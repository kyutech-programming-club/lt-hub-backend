<?php

namespace App\Http\Dtos\Movie;

use App\Http\Dtos\BaseDto;

class FindByIdUserDto extends BaseDto
{
    public int $userId;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
