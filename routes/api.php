<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



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


Route::get('vehicle', function () {
    return response()->json(['message' => 'Vehicles']);
});

Route::get('client', function () {
    return response()->json(['message' => 'clients']);
});

Route::get('model', function () {
    return response()->json(['message' => 'models']);
});


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
        
    });

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('vehicles/{id}', [App\Http\Controllers\VehicleController::class, 'show']);
    Route::post('vehicles', [App\Http\Controllers\VehicleController::class, 'store']);
    Route::put('vehicles/{id}', [App\Http\Controllers\VehicleController::class, 'update']);
    Route::delete('vehicles/{id}', [App\Http\Controllers\VehicleController::class, 'delete']);

    Route::get('clients/{id}', [App\Http\Controllers\ClientController::class, 'show']);
    Route::post('clients', [App\Http\Controllers\ClientController::class, 'store']);
    Route::put('clients/{id}', [App\Http\Controllers\ClientController::class, 'update']);
    Route::delete('clients/{id}', [App\Http\Controllers\ClientController::class, 'delete']);

    Route::get('models/{id}', [App\Http\Controllers\ModelController::class, 'show']);
    Route::post('models', [App\Http\Controllers\ModelController::class, 'store']);
    Route::put('models/{id}', [App\Http\Controllers\ModelController::class, 'update']);
    Route::delete('models/{id}', [App\Http\Controllers\ModelController::class, 'delete']);


});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



