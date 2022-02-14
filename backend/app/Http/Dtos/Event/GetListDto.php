<?php

namespace App\Http\Dto\Movie;

use App\Http\Dto\BaseDto;

class GetListDto extends BaseDto
{
    public int $page;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
