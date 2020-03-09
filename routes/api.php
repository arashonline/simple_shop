<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::apiResource('product', 'api\ProductController');



Route::group(['prefix'=>'product'],function (){
    Route::post('add', 'api\ProductController@store');
    Route::patch('edit', 'api\ProductController@update');
    Route::delete('delete', 'api\ProductController@destroy');
});

Route::get('products', 'api\ProductController@index');

Route::group(['prefix'=>'order'],function (){
    Route::post('add', 'api\OrderController@store');
});
