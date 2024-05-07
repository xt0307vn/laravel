<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\LaptopRepositoryInterface;
use App\Models\Laptop;

class LaptopRepository extends BaseRepository implements LaptopRepositoryInterface
{
    public function __construct(Laptop $model)
    {
        $this->model = $model;
    }


    public function getFiveLaptop() {
        return $this->model->take(5)->get();
    }
}
