<?php

namespace ehsan\ContactUs\Providers;

use ehsan\Category\models\Category;
use ehsan\Category\Policies\CategoryPolicy;
use ehsan\RolePermission\models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class ContactUsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/contact_route.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'contact');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');
        // Gate::policy(Category::class , CategoryPolicy::class);



      
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        
    }
}
