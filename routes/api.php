<?php

use App\Http\Controllers\Api\SensorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are typically defined within a group which can be assigned the "api" middleware group.
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('api')->group(function () {
//     Route::get('sensors', [SensorController::class, 'index']);
//     Route::get('sensors/{id}', [SensorController::class,'show']);
//     Route::post('sensors', [SensorController::class, 'store']);
//     Route::put('sensors/{id}', [SensorController::class, 'update']);
//     Route::delete('sensors/{id}', [SensorController::class, 'destroy']);
// });

Route::apiResource('sensors', SensorController::class);
