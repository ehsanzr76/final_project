<?php


namespace ehsan\User\providers;

use ehsan\Category\models\Category;
use ehsan\User\Http\Middleware\StoreUserIp;
use ehsan\User\models\User;
use ehsan\User\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{

    public function register()
    {
        config()->set('auth.providers.users.model' , User::class);
        Gate::policy(User::class , UserPolicy::class);
        $this->loadRoutesFrom(__DIR__ . '/../routes/user_route.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../database/factories');
        $this->loadViewsFrom(__DIR__ . '/../resources/views' , 'user');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../resources/Lang');
        $this->app['router']->pushMiddlewareToGroup('web' , StoreUserIp::class);
    }






    public function boot()
    {
  
    }
}