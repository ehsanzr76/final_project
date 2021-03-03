<?php

namespace ehsan\Vip\Providers;

use Illuminate\Support\ServiceProvider;

class VipServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/vip_route.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'vip');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');
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
