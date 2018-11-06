@extends('dash')


@section('content')
    
   <div>

    <div> <h3>RESERVE VEHICULO</h3></div>
    </div>
       
    <form>
      <div class="form-group">
      <div class="col-6 mb-3">
                <label for="description">Descripción Estado</label>
                <input type="text" class="form-control" id="description" name="description" required>
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
    
@endsection
