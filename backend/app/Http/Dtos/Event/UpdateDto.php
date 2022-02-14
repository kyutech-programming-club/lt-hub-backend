<?php

namespace App\Http\Dto\Movie;

use App\Http\Dto\BaseDto;

class UpdateDto extends BaseDto
{
    public int $eventId;
    public string $title;
    public string $description;
    public string $startTime;
    public string $endTime;
    public string $location;
    public string $state;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
