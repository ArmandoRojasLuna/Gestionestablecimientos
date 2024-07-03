<?php

use App\Http\Controllers\ComunicacionController;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\CapacitacionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {



    // Rutas para Responsables
    Route::resource('responsables', ResponsableController::class);

    // Rutas para Administradores
    Route::resource('administradores', AdministradorController::class);

    // Rutas para Establecimiento
    Route::resource('establecimientos', EstablecimientoController::class);

    // Rutas para Capacitaciones
    Route::resource('capacitaciones', CapacitacionController::class);

    // Rutas para Comunicados
    Route::resource('comunicaciones', ComunicacionController::class);

});

// Rutas de autenticación
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
