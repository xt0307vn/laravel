<?php

namespace App\Repositories;

use App\Repositories\BaseRepositoryInterface;

interface LaptopRepositoryInterface extends BaseRepositoryInterface
{
    public function getFiveLaptop();
}
