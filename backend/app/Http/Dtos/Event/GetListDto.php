<?php

namespace App\Http\Dtos\Movie;

use App\Http\Dtos\BaseDto;

class GetListDto extends BaseDto
{
    public int $page;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
