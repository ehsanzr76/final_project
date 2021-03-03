<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'ehsan\Front\Http\Controllers' , 'middleware' => 'web'], function ($router) {
    Route::get('/' , 'HomeController@index')->name('home');
    Route::get('/home' , 'HomeController@index')->name('homepage');
    route::get('/Business/show/{business}' , 'HomeController@ShowBusiness')->name('business.show');
    route::get('/panel/Front/users' , 'HomeController@FrontDashboard')->name('Dashboard.Front');



});