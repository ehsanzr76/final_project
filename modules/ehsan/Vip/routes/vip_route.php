<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

//backend

Route::group(['namespace' => 'ehsan\Vip\Http\Controllers' , 'prefix' => '/Dashboard' , 'middleware' => ['web' , 'auth' , 'verified']], function ($router) {
    route::get('/Vip' , 'VipController@index')->name('vip');
    route::get('/Vip/create' , 'VipController@create')->name('vip.create');
    route::post('/Vip/store' , 'VipController@store')->name('vip.store');
    route::get('/Vip/edit/{vip}', 'VipController@edit')->name('vip.edit');
    route::put('/Vip/update/{vip}', 'VipController@update')->name('vip.update');
    route::get('/Vip/delete/{vip}', 'VipController@destroy')->name('vip.delete');

});


