<?php

namespace App\Services;

use App\Repositories\MotorRepository;

class MotorService extends KendaraanService
{
    protected $motorRepository;

    public function __construct(MotorRepository $motorRepository)
    {
        parent::__construct($motorRepository);
        $this->motorRepository = $motorRepository;
    }

    public function createMotor($data)
    {
        return $this->motorRepository->create($data);
    }
}
