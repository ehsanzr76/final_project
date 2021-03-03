<?php
namespace ehsan\AdminPanel\Providers;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom( __DIR__ . '/../routes/panel_route.php');
        $this->loadViewsFrom( __DIR__ . '/../resources/views' , 'panel');
    }


    public function boot()
    {

     
        
    }
}
