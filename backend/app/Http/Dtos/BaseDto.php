<?php

namespace App\Http\Dtos;

class BaseDto
{
    public int $accessUserId;

    public function __construct(array $array)
    {
        foreach ($array as $key => $value) {
            if ($key == 'accessUserId') {
                $this->accessUserId = $value;
            } else if ($value) {
                $this->$key = $value;
            }
        }
    }
}
