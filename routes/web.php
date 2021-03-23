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

Route::get('/','HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('payment-method')->middleware('auth')->group( function() {
    Route::get('/','PaymentMethodController@index');
    Route::post('save','PaymentMethodController@store');
    Route::post('save/{id}','PaymentMethodController@update');
    Route::delete('{id}', 'PaymentMethodController@destroy');
});
