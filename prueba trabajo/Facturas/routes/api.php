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

Route::post('/register', [\App\Http\Controllers\usuariosController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\usuariosController::class, 'login']);
Route::post('/userinfo', [\App\Http\Controllers\usuariosController::class, 'infouser'])->middleware('auth:sanctum');
