<?php

namespace App\Services;

use App\Repositories\KendaraanRepository;

class KendaraanService
{
    protected $kendaraanRepository;

    public function __construct(KendaraanRepository $kendaraanRepository)
    {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    public function getAllKendaraan()
    {
        return $this->kendaraanRepository->getAll();
    }

    public function getKendaraanById($id)
    {
        return $this->kendaraanRepository->getById($id);
    }

    public function createKendaraan($data)
    {
        return $this->kendaraanRepository->create($data);
    }

    public function updateKendaraan($id, $data)
    {
        return $this->kendaraanRepository->update($id, $data);
    }

    public function deleteKendaraan($id)
    {
        return $this->kendaraanRepository->delete($id);
    }
}
