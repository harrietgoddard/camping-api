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


Route::get('regions', 'API\Regions@index');
Route::get('regions/{region}', 'API\Regions\Campsites@index');
Route::get('campsites/{campsite}', 'API\Campsites@show');
Route::get('campsites/{campsite}/reviews', 'API\Campsites\Reviews@index');