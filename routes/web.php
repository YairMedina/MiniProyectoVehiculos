<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/inicio', [App\Http\Controllers\HomeController::class, 'index_inicio'])->name('inicio');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();
Route::POST('/assign-role', [App\Http\Controllers\HomeController::class, 'assignrols']);


Route::middleware(['role:admin'])->group(function () {
    Route::get('/user', [App\Http\Controllers\UserController::class, 'user'])->name('user');

    Route::get('/client', [App\Http\Controllers\ClientController::class, 'client'])->name('client');

    Route::get('/vehicle', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicle');


});

Route::middleware(['role:cliente'])->group(function () {
    Route::get('/model', [App\Http\Controllers\ModelController::class, 'model'])->name('modelo');
});
