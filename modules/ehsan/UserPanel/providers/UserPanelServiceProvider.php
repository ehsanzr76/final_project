<?php

namespace ehsan\UserPanel\Providers;

use Illuminate\Support\ServiceProvider;

class UserPanelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom( __DIR__ . '/../routes/UserPanel_route.php');
        $this->loadViewsFrom( __DIR__ . '/../resources/views' , 'UserPanel');
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
