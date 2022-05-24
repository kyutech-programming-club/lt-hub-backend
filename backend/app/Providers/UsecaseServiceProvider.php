<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UsecaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Usecases\EventUsecaseInterface::class,
            function ($app) {
                return new \App\Usecases\EventUsecase(
                    $app->make(\App\Repositories\EventRepositoryInterface::class)
                );
            },
        );
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
