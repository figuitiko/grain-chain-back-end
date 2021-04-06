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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::middleware(['cors'])->group(function () {
    Route::post('register', 'App\Http\Controllers\UserController@register');
    Route::post('login', 'App\Http\Controllers\UserController@authenticate');
});

Route::middleware(['cors', 'jwt.verify'])->group(function () {
    Route::get('user','App\Http\Controllers\UserController@getAuthenticatedUser');
    Route::resource('characters', \App\Http\Controllers\CharacterController::class);
    Route::resource('locations', \App\Http\Controllers\LocationController::class);
});

