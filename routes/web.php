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

Route::get('/', function () {
    return view('welcome');
});
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');




    Route::get('/home', function () {
        return view('home/index');
    });

    Route::get('/users', 'UserController@index');
    Route::get('/users/{user}', 'UserController@show');

    Route::get('/compliments/received', 'ComplimentsController@received');
    Route::get('/compliments/given', 'ComplimentsController@given');
    Route::post('/compliments', 'ComplimentsController@store');


Auth::routes();

