<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

\Route::group(['prefix' => 'v1', 'namespace' => 'v1'], function() {

    \Route::group(['prefix' => 'posts'], function() {

        \Route::group(['middleware' => 'auth:api'], function() {
            \Route::delete('/{post}', 'PostsController@destroy');
            \Route::post('/', 'PostsController@store');
            \Route::put('/{post}', 'PostsController@update');
        });

        \Route::get('/', 'PostsController@index');
        \Route::get('/{post}', 'PostsController@show');
        \Route::get('/{post}/comments', 'CommentsController@index');
        \Route::post('/{post}/comments', 'CommentsController@store');
        \Route::get('/{post}/comments/{comment}', 'CommentsController@show');

    });

});
