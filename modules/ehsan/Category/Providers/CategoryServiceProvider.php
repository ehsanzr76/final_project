<?php

namespace ehsan\Category\Providers;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/category_route.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views/' , 'Category');
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
