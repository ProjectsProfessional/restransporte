@extends('dash')
@section('css-template')
    @parent
    <link href="{{asset("css/form-validation.css")}}" rel="stylesheet">
@endsection
@section('content')
        <div>

        <div> <h3>NUEVOS DESTINOS</h3></div>
        </div> 
        <div class="row">
            <div class="col-6 mb-3">
                <label for="code">Código</label>
                <input type="text" class="form-control" id="code" name="code" required>
            </div>
            <div class="col-6 mb-3">
                <label for="description">Nombre de Destino</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <div class="col-6"></div>
             <div class="col-12">
                <button class="btn btn-outline-success">
                    <span data-feather="save"></span>
                    Guardar
               </button>
                <div class="btn-group mr-2">
                  <a class="btn btn-outline-danger" href="{{route('indexdestino')}}">
                    <span data-feather="arrow-left-circle"></span>
                    Cancelar

                  </a>
                </div>
        </div>
    </form>
@endsection
