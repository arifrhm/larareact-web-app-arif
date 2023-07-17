<?php

namespace App\Models;

class Motor extends Kendaraan
{
    protected $fillable = [
        'mesin',
        'tipe_suspensi',
        'transmisi',
    ];
}
