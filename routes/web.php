<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DueniosController;
use App\Http\Controllers\PropiedadesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calcular/{area}/{piso?}', [HomeController::class, 'calcular_V_A']);
Route::get('/duenios/mostrar', [DueniosController::class, 'mostrarDuenios']);

Route::get('/duenios/insertar', [DueniosController::class, 'insertarDuenio']);
Route::post('/duenios/guardar', [DueniosController::class, 'guardarDuenio'])->name('duenio.guardar');

Route::get('/duenios/editar/{id}',[DueniosController::class, 'editarDuenio'])->name('duenio.editar');
Route::get('/duenios/editar/guardar/{id}',[DueniosController::class, 'guardarDuenioEditado'])->name('duenio.editar.guardar');


//rutas para propiedades
Route::get('/propiedades/mostrar', [PropiedadesController::class, 'mostrarPropiedades']);
Route::get('/propiedades/insertar',[PropiedadesController::class, 'insertarPropiedades']);
Route::post('/propiedades/guardar', [PropiedadesController::class, 'guardarPropiedades'])->name('propiedade.guardar');

Route::get('/propiedades/editar/{id}', [PropiedadesController::class, 'editarPropiedades'])->name('propiedade.editar');
Route::get('/propiedades/editar/guardar/{id}', [PropiedadesController::class, 'editGuardarPropiedades'])->name('propiedade.editar.guardar');