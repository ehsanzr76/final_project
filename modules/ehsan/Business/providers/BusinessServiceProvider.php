<?php

namespace ehsan\Business\providers;

use Illuminate\Support\ServiceProvider;

class BusinessServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');
        $this->loadRoutesFrom(__DIR__ . '/../routes/Business_route.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views' , 'Business');
        // $this->loadJsonTranslationsFrom(__DIR__ . '/../resources/Lang');
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
