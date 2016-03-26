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

Route::get('/', 'GameController@index');
//Route::get('/', 'CategoryController@index');

Route::get('/article/{n}', array('as' => 'article', 'uses' => 'GameController@show'))->where('n', '[0-9]+');

Route::get('/category/{n}', 'CategoryController@show')->where('n', '[0-9]+');

Route::get('/cart', 'CartController@index');

Route::get('/contact', 'ContactController@getInfos');
Route::post('/contact', 'ContactController@postInfos');

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


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');

    Route::get('/home', 'HomeController@index');
});

