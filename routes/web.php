<?php

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

Auth::routes();

Route::namespace('Auth')->group(function () {
    Route::get('/logout', 'LoginController@logout');
});

Route::get('/', 'HomeController@index');

Route::get('/detail/{id}', 'BookController@show');

Route::get('/language/{locale}', 'LanguageController@index');

Route::namespace('Admin')->group(function () {
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/', 'HomeController@index');
    });
});
