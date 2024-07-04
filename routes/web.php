<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DueniosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calcular/{area}/{piso?}', [HomeController::class, 'calcular_V_A']);
Route::get('/duenios/mostrar', [DueniosController::class, 'mostrarDuenios']);
Route::get('/duenios/insertar', [DueniosController::class, 'insertarDuenio']);
Route::post('/duenios/guardar', [DueniosController::class, 'guardarDuenio'])->name('duenio.guardar');