<?php

namespace App\Providers;

use App\Repository\ClientRepositoryInterface;
use App\Repository\Eloquent\ClientRepository;
use App\Repository\Eloquent\ModelRepository;
use App\Repository\Eloquent\VehicleRepository;
use App\Repository\ModelRepositoryInterface;
use App\Repository\VehicleRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VehicleRepositoryInterface::class, VehicleRepository::class);
        $this->app->bind(ClientRepositoryInterface::class, ClientRepository::class);
        $this->app->bind(ModelRepositoryInterface::class, ModelRepository::class);
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
