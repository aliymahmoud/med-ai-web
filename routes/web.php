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
    return redirect(route('login'));
});

Auth::routes();

Route::group(['middleware' => ['auth'],],function(){
    Route::get('/home','HomeController@home')->name('home');
    Route::get('/diagnostic-form','HomeController@form')->name('form');
    Route::post('/diagnostic-xray','HomeController@next')->name('next');
    Route::get('/critical/{date}','HomeController@critical')->name('critical');
    Route::get('/details/{id}','HomeController@details')->name('details');
});

