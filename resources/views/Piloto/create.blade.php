@extends('dash')
@section('title',$title)
@section('css-template')
    @parent
    <link href="{{asset("css/form-validation.css")}}" rel="stylesheet">
@endsection
@section('content')
    <div>

    <div> <h3>INGRESE PILOTO</h3></div>
    </div>
	  <form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
<<<<<<< HEAD
      <label for="validationDefault01">1er Nombre</label>
      <input type="text" class="form-control" id="v1" placeholder=""  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">2do Nombre</label>
      <input type="text" class="form-control" id="v2" placeholder="" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">3er Nombre</label>
      <input type="text" class="form-control" id="v3" placeholder="" value="" required>
=======
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
>>>>>>> 3705c3a0eddc2039a8f936e623ffe03328265754
    </div>
  </div>
 <div class="form-row">
    <div class="col-md-4 mb-3">
<<<<<<< HEAD
      <label for="validationDefault01">1er Apellido</label>
      <input type="text" class="form-control" id="v4" placeholder="" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">2do Apellido</label>
      <input type="text" class="form-control" id="v5" placeholder="" value="" required>
=======
      <label for="apellido1">1er Apellido</label>
      <input type="text" class="form-control" name="apellido1" id="apellido1" placeholder="primer nombre" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="apellido2">2do Apellido</label>
      <input type="text" class="form-control" name="apellido2" id="apellido2" placeholder="segundo nombre" required>
>>>>>>> 3705c3a0eddc2039a8f936e623ffe03328265754
    </div>
</div> 
<div class="form-row">
    <div class="col-md-4 mb-3">
<<<<<<< HEAD
      <label for="validationDefault02">Fecha Vencimiento Licencia </label>
      <input type="date" class="form-control" id="v6" placeholder="segundo nombre"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Fecha Contratacion</label>
      <input type="date" class="form-control" id="v7" placeholder=""  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Fecha de Baja </label>
      <input type="date" class="form-control" id="v8" placeholder=""  required>
=======
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
>>>>>>> 3705c3a0eddc2039a8f936e623ffe03328265754
    </div>
</div>
         
           <div class="row">
            <div class="col-6"></div>
             <div class="col-12">
                <button class="btn btn-outline-success">
                    <span data-feather="save"></span>
                    Guardar
               </button>
                <div class="btn-group mr-2">
                  <a class="btn btn-outline-danger" href="{{route('indexpiloto')}}">
                    <span data-feather="arrow-left-circle"></span>
                    Cancelar

                  </a>
                </div>
            </div>
          </div>
        </div>


    </form>
@endsection
