<?php

namespace ehsan\Comment\Providers;

use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views' , 'comment');
        $this->loadRoutesFrom(__DIR__ . '/../routes/comment_route.php');
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
