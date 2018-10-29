@extends('dash')
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
      <label for="validationDefault01">1er Nombre</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="primer nombre" value="Ingrese Nombre"" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">2do Nombre</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="segundo nombre" value="Ingres Nombre" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">3er Nombre</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="segundo nombre" value="Ingrese Nombre" required>
    </div>
  </div>
 <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">1er Apellido</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="primer nombre" value="Ingrese Apellido" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">2do Apellido</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="segundo nombre" value="Ingrese Apellido" required>
    </div>
</div> 
<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Fecha Vencimiento Licencia </label>
      <input type="date" class="form-control" id="validationDefault02" placeholder="segundo nombre"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Fecha Contratacion</label>
      <input type="date" class="form-control" id="validationDefault02" placeholder="segundo nombre"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Fecha de Baja </label>
      <input type="date" class="form-control" id="validationDefault02" placeholder="segundo nombre"  required>
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
