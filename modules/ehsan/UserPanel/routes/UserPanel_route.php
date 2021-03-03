<?php

use ehsan\User\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'ehsan\UserPanel\Http\Controllers' , 'prefix' => '/UserPanel' ,  'middleware' =>['web' ,'auth' , 'verified']], function ($router) {

    route::get('/' , 'UserPanelController@index')->name('UserPanel');
    Route::get('/EditProfile', 'UserPanelController@EditProfile')->name('UserPanel.EditProfile');
    Route::post('/UpdateProfile', 'UserPanelController@UpdateProfile')->name('UserPanel.UpdateProfile');
    Route::get('/ShowBusiness', 'UserPanelController@ShowBusiness')->name('UserPanel.ShowBusiness');


});
