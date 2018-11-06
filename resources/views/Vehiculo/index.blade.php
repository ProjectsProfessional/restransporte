<<<<<<< HEAD
@extends('dash')
     
@section('content')
        <div class="container">
            <div class="btn-group mr-2">
                    <a class="btn btn-lg btn-outline-danger " href="{{route('vehiculo')}}">
                        <span data-feather="arrow-left-circle"></span>
                        Crear
                    </a>
                </div>
            <div class="table-responsive">
        </div>
        <h2>RESUMEN</h2>
        
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Código</th>
                <th>Marca</th>
                <th>Tipo-Vehiculo</th>
                <th>Descripción</th>
                <th>Modelo</th>
                <th>Pasajeros</th>
                <th>Detalles</th>
            </tr>
            </thead>
            <tbody>

           
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>
                        <a href="#">
=======
@extends('layout')
@section('title', "Listado de Vehiculos")
@section('content-title',"Listado de Vehiculos")
@section('content-header-buttons')
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{route('Vehiculo.create')}}">
                <span data-feather="arrow-up-circle"></span>
                Nuevo
            </a>
        </div>
    </div>
@endsection
@section('content')
	@if (session('fallo'))
	    <div class="alert alert-danger alert-dismissible fade show" role="alert">
	    {{ session('fallo') }}
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		 <span aria-hidden="true">&times;</span>
	    </button>
	  </div>
	@endif
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
	            <tr>
	                <th>#</th>
	                <th>Marca</th>
                    <th>Tipo Transporte</th>
                    <th>Pasajeros</th>
	                <th>Detalles</th>
	            </tr>
            </thead>
            <tbody>
            @forelse($vehiculos as $vehiculo)
                <tr>
                    <td> {{$vehiculo->ID_VEHICULO}}</td>
                    <td> {{$vehiculo->ID_MARCA}}</td>
                    <td> {{$vehiculo->ID_TIPO_TRANSPORTE}}</td>
                    <td> {{$vehiculo->PASAJEROS}}</td>
                    <td>
                        <a href="{{route('MarcaVehiculo.details',[$vehiculo->ID_VEHICULO])}}">
>>>>>>> 3705c3a0eddc2039a8f936e623ffe03328265754
                            <span data-feather="edit"></span>
                            Ver Detalles
                        </a>
                    </td>
                </tr>
<<<<<<< HEAD
            
                <p>NO HAY VEHICULOS DEFINIDOS</p>
            
            </tbody>
        </table>
    </div>

@endsection
=======
            @empty
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
>>>>>>> 3705c3a0eddc2039a8f936e623ffe03328265754
