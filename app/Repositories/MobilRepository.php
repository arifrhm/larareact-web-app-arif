<?php

namespace App\Repositories;

use App\Models\Mobil;

class MobilRepository extends KendaraanRepository
{
    public function create($data)
    {
        return Mobil::create($data);
    }
}
