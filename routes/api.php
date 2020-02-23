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

Route::prefix('/freelancers')->group(function () {

    Route::get('/', ['uses' => 'FreelancerController@get']);
    Route::get('/{freelancer_id}', ['uses' => 'FreelancerController@detail'])->where(['freelancer_id' => '[0-9+]']);
    Route::post('/', ['uses' => 'FreelancerController@createFreelancer']);
    Route::delete('/{freelancer_id}', ['uses' => 'FreelancerController@delete'])->where(['freelancer_id' => '[0-9+]']);
    Route::put('/{freelancer_id}', ['uses' => 'FreelancerController@updateFreelancer'])->where(['freelancer_id' => '[0-9+]']);

});

Route::prefix('/customers')->group(function () {

    Route::get('/', ['uses' => 'CustomerController@get']);
    Route::get('/{customer_id}', ['uses' => 'CustomerController@detail'])->where(['customer_id' => '[0-9+]']);
    Route::post('/', ['uses' => 'CustomerController@create']);
    Route::delete('/{customer_id}', ['uses' => 'CustomerController@delete'])->where(['customer_id' => '[0-9+]']);
    Route::put('/{customer_id}', ['uses' => 'CustomerController@update'])->where(['customer_id' => '[0-9+]']);

});

Route::prefix('/orders')->group(function () {

    Route::get('/', ['uses' => 'OrdersController@get']);
    Route::get('/{order_id}', ['uses' => 'CustomerController@detail'])->where(['order_id' => '[0-9+]']);
    Route::post('/', ['uses' => 'CustomerController@create']);
    Route::delete('/{order_id}', ['uses' => 'CustomerController@delete'])->where(['order_id' => '[0-9+]']);
    Route::put('/{order_id}', ['uses' => 'CustomerController@update'])->where(['order_id' => '[0-9+]']);

});

Route::prefix('/applications')->group(function () {

    Route::get('/', ['uses' => 'AplicationController@get']);
    Route::get('/{order_id}', ['uses' => 'AplicationController@detail'])->where(['order_id' => '[0-9+]']);
    Route::post('/', ['uses' => 'AplicationController@create']);
    Route::delete('/{order_id}', ['uses' => 'AplicationController@delete'])->where(['order_id' => '[0-9+]']);
    Route::put('/{order_id}', ['uses' => 'AplicationController@update'])->where(['order_id' => '[0-9+]']);

});
