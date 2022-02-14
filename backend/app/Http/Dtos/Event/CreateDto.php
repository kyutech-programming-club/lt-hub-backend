<?php

namespace App\Http\Dto\Movie;

use App\Http\Dto\BaseDto;

class CreateDto extends BaseDto
{
    public string $title;
    public string $description;
    public string $startTime;
    public string $endTime;
    public string $location;
    public string $state;
    public int $hostId;

    public function __construct(array $array)
    {
        parent::__construct($array);
    }
}
