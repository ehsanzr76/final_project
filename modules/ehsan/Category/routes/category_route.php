<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'ehsan\Category\Http\Controllers', 'middleware' => ['web', 'auth', 'verified']], function ($router) {

    route::get('/categories' , 'CategoryController@index')->name('categories');
    route::get('/categories/create' , 'CategoryController@create')->name('categories.create');
    route::post('/categories/store' , 'CategoryController@store')->name('categories.store');
    route::get('/categories/edit/{category}' , 'CategoryController@edit')->name('categories.edit');
    route::put('/categories/update/{category}' , 'CategoryController@update')->name('categories.update');
    route::get('/categories/delete/{category}' , 'CategoryController@destroy')->name('categories.delete');




});
