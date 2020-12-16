<?php

namespace App\Models;

use DateTimeInterface;

trait SerializeDateTrait
{
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
