<?php

namespace ehsan\Media\Providers;

use Illuminate\Support\ServiceProvider;

class MediaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');
        // $this->loadRoutesFrom(__DIR__ . '/../routes/RolePermission_route.php');
        // $this->loadViewsFrom(__DIR__ . '/../resources/views' , 'RolePermission');
        // $this->loadJsonTranslationsFrom(__DIR__ . '/../resources/Lang');
        // DatabaseSeeder::$seeders[] = RolePermissionSeeder::class;
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
