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

Route::prefix('auth')->group(function () {
    Route::post('register', 'App\Http\Controllers\AuthController@register');
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::get('refresh', 'App\Http\Controllers\AuthController@refresh');

    Route::group(['middleware' => 'auth:api'], function(){
        Route::get('user', 'App\Http\Controllers\AuthController@user');
        Route::post('logout', 'App\Http\Controllers\AuthController@logout');
        Route::get('users', 'App\Http\Controllers\UserController@index')->middleware('isAdmin');
        Route::get('users/{id}', 'App\Http\Controllers\UserController@show')->middleware('isAdminOrSelf');
    });
    

});
