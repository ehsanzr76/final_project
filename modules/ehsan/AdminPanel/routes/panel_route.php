<?php

// use Illuminate\Routing\Route;

use ehsan\User\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'ehsan\AdminPanel\Http\Controllers' , 'middleware' =>['web' ,'auth' , 'verified']], function ($router) {

    route::get('/Dashboard' , 'DashboardController@index')->name('Dashboard');

   
});






