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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::POST('/asignar-role', [App\Http\Controllers\HomeController::class, 'asignaroles']);

// Route::get('/vehiculo', [App\Http\Controllers\HomeController::class, 'index_vehiculo'])->name('vehiculo');
// Route::get('/modelo', [App\Http\Controllers\HomeController::class, 'index_modelo'])->name('modelo');
// Route::get('/cliente', [App\Http\Controllers\HomeController::class, 'index_cliente'])->name('cliente');
Route::get('/inicio', [App\Http\Controllers\HomeController::class, 'index_inicio'])->name('inicio');
// Route::get('/usuario', [App\Http\Controllers\HomeController::class, 'index_usuario'])->name('usuario');
Route::middleware(['role:admin'])->group(function () {
    Route::get('/usuario', [App\Http\Controllers\HomeController::class, 'index_usuario'])->name('usuario');
    Route::get('/cliente', [App\Http\Controllers\HomeController::class, 'index_cliente'])->name('cliente');
    Route::get('/vehiculo', [App\Http\Controllers\HomeController::class, 'index_vehiculo'])->name('vehiculo');


});

Route::middleware(['role:cliente'])->group(function () {
    Route::get('/modelo', [App\Http\Controllers\HomeController::class, 'index_modelo'])->name('modelo');
});
