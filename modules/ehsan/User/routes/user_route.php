<?php

// use Illuminate\Routing\Route;

use ehsan\User\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'ehsan\User\Http\Controllers' , 'middleware' => 'web'], function ($router) {

    // verify_email
    Route::get('/email/verify' , 'Auth\VerificationController@show')->name('verification.notice');
    Route::post('/email/verify' , 'Auth\VerificationController@verify')->name('verification.verify');
    Route::post('/email/resend' , 'Auth\VerificationController@resend')->name('verification.resend');

    // login
    Route::get('/login' , 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login' , 'Auth\LoginController@login')->name('login');
    Route::post('/logout' , 'Auth\LoginController@logout')->name('logout');


    // reset password
    Route::post('password/email' , 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset' , 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::get('password/reset/{token}' , 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset' , 'Auth\ResetPasswordController@reset')->name('password.update');

    //register
    Route::get('/register' , 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register' , 'Auth\RegisterController@register')->name('register');


});






Route::group(['namespace' => 'ehsan\User\Http\Controllers' , 'middleware' => 'web'], function ($router) {
    Route::get('/home' , 'HomeController@index')->name('homepage');
    Route::get('/', 'HomeController@index')->name('home');


});



