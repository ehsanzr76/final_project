<?php

namespace ehsan\RolePermission\Providers;

use DatabaseSeeder;
use ehsan\RolePermission\database\seeds\RolePermissionSeeder;
use ehsan\RolePermission\models\Permission;
use ehsan\User\models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class RolePermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');
        $this->loadRoutesFrom(__DIR__ . '/../routes/RolePermission_route.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views' , 'RolePermission');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../resources/Lang');
        DatabaseSeeder::$seeders[] = RolePermissionSeeder::class;

        
        Gate::before(function ($user) {
           return $user->hasPermissionTo(Permission::PERMISSION_SUPER_ADMIN) ? true : null;
        });
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
