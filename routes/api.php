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

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::apiResource('v1/books', 'BookController');
Route::post('books/{book}/ratings', 'RatingController@store');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

