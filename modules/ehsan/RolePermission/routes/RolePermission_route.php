<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'ehsan\RolePermission\Http\Controllers', 'prefix' => '/Dashboard',  'middleware' => ['web', 'auth', 'verified', 'permission:manage permissions']], function ($router) {

    route::get('/RolePermissions', 'RolePermissionController@index')->name('RolePermissions');
    route::post('/RolePermissions/store', 'RolePermissionController@store')->name('RolePermissions.store');
    route::get('/RolePermissions/edit/{RolePermission}', 'RolePermissionController@edit')->name('RolePermissions.edit');
    route::put('/RolePermissions/update/{RolePermission}', 'RolePermissionController@update')->name('RolePermissions.update');
    route::get('/RolePermissions/delete/{RolePermission}', 'RolePermissionController@destroy')->name('RolePermissions.delete');


});
