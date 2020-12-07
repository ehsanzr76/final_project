<?php

use ehsan\User\Mail\VerifyCodeMail;
use ehsan\User\models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Inline\Element\Code;
use TwitterPhp\Connection\User as ConnectionUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/test', function () {
 return new VerifyCodeMail(123456);
    
});
