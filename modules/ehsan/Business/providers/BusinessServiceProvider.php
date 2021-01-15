<?php

namespace ehsan\Business\providers;

use ehsan\Business\models\Business;
use ehsan\Business\Policies\BusinessPolicy;
use ehsan\RolePermission\models\Permission;
use Illuminate\Support\Facades\Gate;
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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'Business');
        Gate::policy(Business::class, BusinessPolicy::class);


     


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
