<?php

namespace App\Http\Dto;

class BaseDto
{
    public int $accessUserId;
    public int $accessUserRole;

    public function __construct(array $array)
    {
        foreach ($array as $key => $value) {
            $this->$key = $value;
        }
    }
}
