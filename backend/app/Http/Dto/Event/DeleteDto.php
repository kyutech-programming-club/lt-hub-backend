<?php

namespace App\Http\Dto\Movie;

use App\Http\Dto\BaseDto;

class DeleteDto extends BaseDto
{
    public int $accessUserId;
    public int $eventId;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
