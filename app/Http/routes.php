<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Routes with controllers

Route::get('/', 'WelcomeController@index');

Route::get('/article', 'ArticleController@index');

Route::get('/cart', 'CartController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/user', 'UserController@index');

//Routes pour toute la partie administration
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    //TODO Ajouter ici les routes pour l'administration
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
});

