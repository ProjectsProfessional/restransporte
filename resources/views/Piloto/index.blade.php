<<<<<<< HEAD
@extends('dash')
     
@section('content')
        <div class="container">
            <div class="btn-group mr-2">
                    <a class="btn btn-lg btn-outline-danger " href="{{route('piloto')}}">
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
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Vencimiento-Licencia</th>
                <th>Fecha-Contratacion</th>
                <th>Fecha-Baja</th>
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
                    <td>
                        <a href="#">
=======
@extends('layout')
@section('title', "Listado de Pilotos")
@section('content-title',"Listado de Pilotos")
@section('content-header-buttons')
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{route('Piloto.create')}}">
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
	                <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha Contratacion</th>
	                <th>Detalles</th>
	            </tr>
            </thead>
            <tbody>
            @forelse($pilotos as $piloto)
                <tr>
                    <td> {{$piloto->ID_PILOTO}}</td>
                    <td> {{$piloto->NOMBRE1}}</td>
                    <td> {{$piloto->APELLIDO1}}</td>
                    <td> {{$piloto->FECHA_CONTRATACION}}</td>
                    <td>
                        <a href="{{route('Piloto.details',[$piloto->ID_VEHICULO])}}">
>>>>>>> 3705c3a0eddc2039a8f936e623ffe03328265754
                            <span data-feather="edit"></span>
                            Ver Detalles
                        </a>
                    </td>
                </tr>
<<<<<<< HEAD
            
                <p>NO HAY PILOTOS DEFINIDOS</p>
            
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
