<?php

namespace App\Http\Dtos\Movie;

use App\Http\Dtos\BaseDto;

class FindByIdDto extends BaseDto
{
    public int $eventId;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
