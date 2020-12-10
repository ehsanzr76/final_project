<?php
namespace ehsan\Panel\Providers;

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
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom( __DIR__ . '/../routes/panel_route.php');
        $this->loadViewsFrom( __DIR__ . '/../resources/views' , 'panel');
        
    }
}
