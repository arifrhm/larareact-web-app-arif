<?php

namespace App\Services;

use App\Repositories\MobilRepository;

class MobilService extends KendaraanService
{
    protected $mobilRepository;

    public function __construct(MobilRepository $mobilRepository)
    {
        parent::__construct($mobilRepository);
        $this->mobilRepository = $mobilRepository;
    }

    public function createMobil($data)
    {
        return $this->mobilRepository->create($data);
    }
}
