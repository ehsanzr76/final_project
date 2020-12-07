<?php


namespace ehsan\User\providers;

use ehsan\User\models\User;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{

    public function register()
    {
        config()->set('auth.providers.users.model' , User::class);
    }





    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/user_route.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../database/factories');
        $this->loadViewsFrom(__DIR__ . '/../resources/views' , 'user');

    }
}