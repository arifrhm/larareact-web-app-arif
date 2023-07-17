<?php

namespace App\Models;

class Mobil extends Kendaraan
{
    protected $fillable = [
        'mesin',
        'kapasitas_penumpang',
        'tipe',
    ];
}
