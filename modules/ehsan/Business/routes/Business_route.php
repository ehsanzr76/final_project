<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

//backend

Route::group(['namespace' => 'ehsan\Business\Http\Controllers' , 'prefix' => '/Dashboard' , 'middleware' => ['web' , 'auth' , 'verified']], function ($router) {

    route::get('/Business' , 'BusinessController@index')->name('Business');
    
});



//frontend

Route::group(['namespace' => 'ehsan\Business\Http\Controllers' , 'middleware' => 'web' ], function ($router) {

    route::get('/Business/create' , 'BusinessController@CreateFrontBusiness')->name('business.create');
    route::post('/Business/store' , 'BusinessController@StoreFrontBusiness')->name('business.store');

    
});

