<?php

namespace App\Services;

use App\Repositories\LaptopRepositoryInterface;

class LaptopService {

    protected $laptopRepo;

    public function __construct(LaptopRepositoryInterface $laptopRepo) {
        $this->laptopRepo = $laptopRepo;
    }

    public function getAll() {
        return $this->laptopRepo->getAll();
    }
}
