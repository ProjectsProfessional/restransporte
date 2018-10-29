
@extends('dash')
@section('css-template')
    
    <link href="{{asset("css/form-validation.css")}}" rel="stylesheet">
@endsection
@section('content-header-buttons')
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="#">
                <span data-feather="arrow-left-circle"></span>
                Cancelar
            </a>
        </div>
    </div>
@endsection
@section('content')
    <form class="needs-validation" action="">
        
        <div class="row">
            <div class="col-6 mb-3">
                <label for="code">Tipo de Vehiculo</label>
			 <select class="form-control" name="tipo" id="moneda" required>
			 	<option value="">--- Escoja el tipo ---</option>
			 	
			 	   <option value="">333333</option>
			 	
			 </select>
            </div>
		  <div class="col-6 mb-3">
			 <label for="code">Modelo</label>
		    <select class="form-control" name="estado" id="moneda" required>
			   <option value="">--- Estado de la habitacion ---</option>
               <option value="">222222222</option>
			  
		    </select>
		  </div>
            <div class="col-6 mb-3">
                <label for="description">Descripción</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
        </div>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6">
                <button class="btn btn-sm btn-outline-secondary">
                    <span data-feather="save"></span>
                    Guardar
                </button>
            </div>
        </div>
    </form>
@endsection
