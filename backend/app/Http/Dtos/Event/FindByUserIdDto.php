<?php

namespace App\Http\Dto\Movie;

use App\Http\Dto\BaseDto;

class FindByIdUserDto extends BaseDto
{
    public int $userId;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
