@extends('dash')
@section('title',$title)
@section('css-template')
    @parent
    <link href="{{asset("css/form-validation.css")}}" rel="stylesheet">
@endsection
@section('content')
   <form class="needs-validation" method="POST" action="{{url('/currencies')}}">
        {{csrf_field()}}
	   <ul>
	   	@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	  <form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="nombre1">1er Nombre</label>
      <input type="text" class="form-control" name="nombre1" id="nombre1" placeholder="primer nombre" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="nombre2">2do Nombre</label>
      <input type="text" class="form-control" name="nombre2" id="nombre2" placeholder="segundo nombre" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="nombre3">3er Nombre</label>
      <input type="text" class="form-control" name="nombre3" id="nombre3" placeholder="segundo nombre" required>
    </div>
  </div>
 <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="apellido1">1er Apellido</label>
      <input type="text" class="form-control" name="apellido1" id="apellido1" placeholder="primer nombre" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="apellido2">2do Apellido</label>
      <input type="text" class="form-control" name="apellido2" id="apellido2" placeholder="segundo nombre" required>
    </div>
</div> 
<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="licencia">Licencia </label>
      <input type="text" class="form-control" name="licencia" id="licencia" placeholder="Licencia"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="contratacion">Fecha Contratacion</label>
      <input type="date" class="form-control" name="contratacion" id="contratacion" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="baja">Fecha de Baja </label>
      <input type="date" class="form-control" name="baja" id="baja" required>
    </div>
</div>
         
             <div class="row">
                    <div class="col-6"></div>
                    <div class="col-12">
                        <button class="btn btn-sm btn-outline-secondary">
                            <span data-feather="save"></span>
                            Guardar
                        </button>
                    </div>
                </div>


    </form>
@endsection
