<?php

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
    return view('dash');
});

Route::get('/tipoVehiculos/create', function () {
       return view('tipoVehiculo.create');
})->name('tvehiculo');

Route::get('/MarcaVehiculos/create', function () {
       return view('MarcaVehiculo.create');
})->name('marca');

Route::get('/Vehiculo/create', function () {
       return view('Vehiculo.create');
})->name('vehiculo');

Route::get('/Dashboard', function () {
       return view('dash');
})->name('dash');

Route::get('/Destinos', function () {
       return view('Destinos.create');
})->name('destinos');

Route::get('/EstadoReserva', function () {
       return view('EstadosReserva.create');
})->name('estadoreserva');

Route::get('/Pilotos', function () {
       return view('Piloto.create');
})->name('piloto');

Route::get('/VehiculosNuevos', function () {
       return view('NuevoVehiculo.create');
})->name('nvehiculo');