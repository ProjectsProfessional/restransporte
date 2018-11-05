@extends('layout')
@section('title', "Tipo Vehiculos")
@section('content-title',"Tipo Vehiculos")
@section('content-header-buttons')
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{route('tipoVehiculo.create')}}">
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
	                <th>Descripcion</th>
	                <th>Detalles</th>
	            </tr>
            </thead>
            <tbody>
            @forelse($marcas as $marca)
                <tr>
                    <td> {{$marca->ID_MARCA}}</td>
                    <td> {{$marca->DESCRIPCION}}</td>
                    <td>
                        <a href="{{route('MarcaVehiculo.details',[$marca->ID_MARCA])}}">
                            <span data-feather="edit"></span>
                            Ver Detalles
                        </a>
                    </td>
                </tr>
            @empty
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
