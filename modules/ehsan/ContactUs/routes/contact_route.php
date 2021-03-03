<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

//backend

Route::group(['namespace' => 'ehsan\ContactUs\Http\Controllers' , 'prefix' => '/Dashboard' , 'middleware' => ['web' , 'auth' , 'verified']], function ($router) {
    route::get('/Contact' , 'ContactController@index')->name('contact');
    route::get('/Contact/edit/{contact}', 'ContactController@edit')->name('contact.edit');
    route::put('/Contact/update/{contact}', 'ContactController@update')->name('contact.update');
    route::get('/Contact/delete/{contact}', 'ContactController@destroy')->name('contact.delete');
});




//frontend

Route::group(['namespace' => 'ehsan\ContactUs\Http\Controllers' , 'middleware' => 'web' ], function ($router) {
    route::get('/ContactUs/create' , 'ContactController@CreateFrontContactUs')->name('contact.create');
    route::post('/ContactUs/store' , 'ContactController@StoreFrontContactUs')->name('contact.store');
});

