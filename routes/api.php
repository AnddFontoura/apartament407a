<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$group = [
    'middleware' => ['auth:api'],
    'prefix' => ['payment-method']
];

//Route::group($group, function() {
    Route::get('payment-method','Api\PaymentMethodController@index');
    Route::post('payment-method/save','Api\PaymentMethodController@store');
    Route::post('payment-method/save/{id}','Api\PaymentMethodController@update');
    Route::delete('payment-method/{id}', 'Api\PaymentMethodController@destroy');
//});
