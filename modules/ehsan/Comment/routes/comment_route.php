<?php

use Illuminate\Support\Facades\Route;


///back end
Route::group(['namespace' => 'ehsan\Comment\Http\Controllers' , 'prefix' => '/Dashboard' , 'middleware' => ['web' , 'auth' , 'verified']], function ($router) {

    route::get('/comment' , 'CommentController@index')->name('comment');
    route::get('/comment/status/{comment}', 'CommentController@updatestatus')->name('comment.status');
    route::get('/comment/edit/{comment}', 'CommentController@edit')->name('comment.edit');
    route::put('/comment/update/{comment}', 'CommentController@update')->name('comment.update');
    route::get('/comment/delete/{comment}', 'CommentController@destroy')->name('comment.delete');



});






////front end
Route::group(['namespace' => 'ehsan\Comment\Http\Controllers' , 'middleware' => 'web' ], function ($router) {
  
    route::post('/comment/store/{business}' , 'CommentController@storeFrontComment')->name('comment.store');

});