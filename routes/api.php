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

    \Route::get('/users', 'UsersController@index');
    \Route::get('/users/{user}', 'UsersController@show');

    \Route::group(['prefix' => 'posts'], function() {

        \Route::group(['middleware' => 'auth:api'], function() {
            \Route::delete('/{post}', 'PostsController@destroy');
            \Route::post('/', 'PostsController@store');
            \Route::put('/{post}', 'PostsController@update');
        });

        \Route::get('/', 'PostsController@index');
        \Route::get('/{post}', 'PostsController@show');

        \Route::group(['prefix' => '/{post}/comments'], function() {
            \Route::get('/', 'CommentsController@index');
            \Route::get('/{comment}', 'CommentsController@show');

            \Route::group(['middleware' => 'auth:api'], function() {
                \Route::post('/', 'CommentsController@store');
                \Route::delete('/{comment}', 'CommentsController@destroy');
                \Route::put('/{comment}', 'CommentsController@update');
            });
        });
    });
});
