<?php

use App\Http\Controllers\API\thisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\apitest;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Controller;

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
Route::get('this', 'API\thisController@index');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

