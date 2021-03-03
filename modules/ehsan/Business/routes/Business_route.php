<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

//backend

Route::group(['namespace' => 'ehsan\Business\Http\Controllers' , 'prefix' => '/Dashboard' , 'middleware' => ['web' , 'auth' , 'verified']], function ($router) {

    route::get('/Business' , 'BusinessController@index')->name('Business');
    route::get('/Business/status/{business}', 'BusinessController@updatestatus')->name('business.status');
    route::get('/Business/edit/{business}', 'BusinessController@edit')->name('business.edit');
    route::put('/Business/update/{business}', 'BusinessController@update')->name('business.update');
    route::get('/Business/delete/{business}', 'BusinessController@destroy')->name('business.delete');

    
});



//frontend

Route::group(['namespace' => 'ehsan\Business\Http\Controllers' , 'middleware' => 'web' ], function ($router) {

    route::get('/Business/create' , 'BusinessController@CreateFrontBusiness')->name('business.create');
    route::post('/Business/store' , 'BusinessController@StoreFrontBusiness')->name('business.store');

});

