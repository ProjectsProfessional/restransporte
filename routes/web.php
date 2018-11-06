<?php



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

Route::get('/Nueva-Reserva', function () {
       return view('Reserva.create');
})->name('nreserva');

Route::get('/Vehiculos-TIPO', function () {
       return view('tipoVehiculo.index');
})->name('indextipov');

Route::get('/catalogo-marcas', function () {
       return view('MarcaVehiculo.index');
})->name('indexmarca');

Route::get('/catalogo-vehiculo', function () {
       return view('Vehiculo.index');
})->name('indexvehiculo');

Route::get('/catalogo-piloto', function () {
       return view('Piloto.index');
})->name('indexpiloto');

Route::get('/catalogo-estados', function () {
       return view('EstadosReserva.index');
})->name('indexreserva');

Route::get('/catalogo-destinos', function () {
       return view('Destinos.index');
})->name('indexdestino');

Route::get('/Nuevo-vehiculo', function () {
       return view('NuevoVehiculo.index');
})->name('indexnvehiculo');