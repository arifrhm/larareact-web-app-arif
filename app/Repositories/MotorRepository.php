<?php

namespace App\Repositories;

use App\Models\Motor;

class MotorRepository extends KendaraanRepository
{
    public function create($data)
    {
        return Motor::create($data);
    }
}
