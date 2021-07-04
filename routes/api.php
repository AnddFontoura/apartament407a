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

Route::prefix('payment-methods')->middleware('auth:api')->group( function() {
    Route::get('/','Api\PaymentMethodController@index');
    Route::post('save','Api\PaymentMethodController@store');
    Route::post('save/{id}','Api\PaymentMethodController@update');
    Route::delete('{id}', 'Api\PaymentMethodController@destroy');
});


Route::prefix('shopping-lists')->middleware('auth:api')->group( function() {
    Route::get('/','Api\ShoppingListController@index');
    Route::post('save','Api\ShoppingListController@store');
    Route::post('save/{id}','Api\ShoppingListController@update');
    Route::delete('{id}', 'Api\ShoppingListController@destroy');
});

Route::prefix('shopping-list-itens')->middleware('auth:api')->group( function() {
    Route::get('/','Api\ShoppingListItemController@index');
    Route::post('save','Api\ShoppingListItemController@store');
    Route::post('save/{id}','Api\ShoppingListItemController@update');
    Route::delete('{id}', 'Api\ShoppingListItemController@destroy');
});
