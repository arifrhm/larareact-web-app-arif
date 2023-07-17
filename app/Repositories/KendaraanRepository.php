<?php

namespace App\Repositories;

use App\Models\Kendaraan;

class KendaraanRepository
{
    public function getAll()
    {
        return Kendaraan::all();
    }

    public function getById($id)
    {
        return Kendaraan::findOrFail($id);
    }

    public function create($data)
    {
        return Kendaraan::create($data);
    }

    public function update($id, $data)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update($data);
        return $kendaraan;
    }

    public function delete($id)
    {
        return Kendaraan::destroy($id);
    }
}
