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
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KendaraanController;

Route::get('kendaraan', [KendaraanController::class, 'index']);
Route::post('kendaraan', [KendaraanController::class, 'store']);
Route::get('kendaraan/{id}', [KendaraanController::class, 'show']);
Route::post('auth/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
