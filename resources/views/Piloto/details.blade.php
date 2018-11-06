@extends('layout')
@section('title', "Detalle de Piloto")
@section('content-title',"Detalle de Piloto")
@section('css-template')
    @parent
    <link href="{{asset("css/form-validation.css")}}" rel="stylesheet">
@endsection
@section('content-header-buttons')
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{route('piloto')}}">
                <span data-feather="arrow-left-circle"></span>
                Cancelar
            </a>
        </div>
    </div>
@endsection
@section('content')
    <form class="needs-validation" method="POST" action="{{url("/Piloto/{$piloto->ID_PILOTO}")}}">
	    {{ method_field('PUT') }}
	    {{csrf_field()}}
    <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="nombre1">1er Nombre</label>
          <input type="text" class="form-control" name="nombre1" id="nombre1" placeholder="primer nombre" value="{{$piloto->NOMBRE1}}" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="nombre2">2do Nombre</label>
          <input type="text" class="form-control" name="nombre2" id="nombre2" placeholder="segundo nombre" value="{{$piloto->NOMBRE2}}" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="nombre3">3er Nombre</label>
          <input type="text" class="form-control" name="nombre3" id="nombre3" placeholder="segundo nombre" value="{{$piloto->NOMBRE3}}" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="apellido1">1er Apellido</label>
          <input type="text" class="form-control" name="apellido1" id="apellido1" placeholder="primer nombre" value="{{$piloto->APELLIDO1}}" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="apellido2">2do Apellido</label>
          <input type="text" class="form-control" name="apellido2" id="apellido2" placeholder="segundo nombre" value="{{$piloto->APELLIDO2}}" required>
        </div>
    </div> 

    <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="licencia">Licencia </label>
          <input type="text" class="form-control" name="licencia" id="licencia" placeholder="Licencia" value="{{$piloto->LICENCIA}}" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="contratacion">Fecha Contratacion</label>
          <input type="date" class="form-control" name="contratacion" id="contratacion" value="{{$piloto->FECHA_CONTRATACION}}" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="baja">Fecha de Baja </label>
          <input type="date" class="form-control" name="baja" id="baja" value="{{$piloto->FECHA_RETIRO}}" required>
        </div>
    </div>

	   <div class="row">
            <div class="col-12"></div>
            <div class="col-6">
                <button class="btn btn-sm btn-outline-secondary">
                    <span data-feather="save"></span>
                    Actualizar
                </button>
            </div>
        </div>
    </form>
@endsection
