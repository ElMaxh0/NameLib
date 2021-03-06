<?php

use App\Http\Controllers\Auth\AuthController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/v1/namelib/{p1}/{p2}/{p3}/{p4}', 'App\Http\Controllers\NameLoad@Load');
Route::get('/v1/namgen/fullrandom/', 'App\Http\Controllers\FullRand@Load');
Route::group(['middleware' => 'api'], function(){
    Route::post('/logout', [AuthController::class, 'logout']);
});
