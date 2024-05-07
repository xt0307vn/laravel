<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\LaptopRepository;

use App\Repositories\BaseRepositoryInterface;
use App\Repositories\LaptopRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(LaptopRepositoryInterface::class, LaptopRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
