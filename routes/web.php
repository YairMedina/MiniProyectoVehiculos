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
Route::POST('/asignar-role', [App\Http\Controllers\HomeController::class, 'asignaroles']);


Route::middleware(['role:admin'])->group(function () {
    Route::get('/usuario', [App\Http\Controllers\UserController::class, 'user'])->name('usuario');

    Route::get('/cliente', [App\Http\Controllers\ClientController::class, 'client'])->name('cliente');

    Route::get('/vehiculo', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehiculo');


});

Route::middleware(['role:cliente'])->group(function () {
    Route::get('/modelo', [App\Http\Controllers\ModelController::class, 'model'])->name('modelo');
});
