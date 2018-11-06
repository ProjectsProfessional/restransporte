@extends('layout')
@section('title', "Detalles de Vehiculo")
@section('content-title',"Detalle de Vehiculo")
@section('css-template')
    @parent
    <link href="{{asset("css/form-validation.css")}}" rel="stylesheet">
@endsection
@section('content-header-buttons')
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{route('vehiculo')}}">
                <span data-feather="arrow-left-circle"></span>
                Cancelar
            </a>
        </div>
    </div>
@endsection
@section('content')
    <form class="needs-validation" method="POST" action="{{url("/Vehiculo/{$vehiculo->ID_VEHICULO}")}}">
	    {{ method_field('PUT') }}
	    {{csrf_field()}}
        <div class="row">
            <div class="form-group">
                    <label for="marca">Escoja Marca</label>
                <select class="form-control" name="marca" id="marca" required>
                    <option name="marca" value="{{$vehiculos->first()->ID_MARCA }}">{{$vehiculo->DESCRIPCION}}</option>
                        @foreach($marcas as $marca)
                            <option value="{{$marca['ID_MARCA'] }}">{{$marca['DESCRIPCION'] }}</option>
                        @endforeach
                </select>
            </div>

            <div class="form-group">
                    <label for="tipo">Tipo Vehiculo</label>
                <select class="form-control" name="tipo" id="tipo" required>
                    <option name="tipo" value="{{$vehiculos->first()->ID_TIPO_TRANSPORTE}}">{{$vehiculo->DESCRIPCION}}</option>
                        @foreach($tipotransportes as $tipo)
                             <option value="{{$tipo['ID_TIPO_TRANSPORTE'] }}">{{$tipo['DESCRIPCION'] }}</option>
                        @endforeach
                </select>
            </div>
        </div>

        <div class="row">
                <div class="col-6 mb-3">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" id="placa" value="{{$vehiculo->PLACA}}" name="placa" required >

                </div>
                    <div class="form-group">
                          <label for="modelo">Modelo</label>
                      <select class="form-control" name="modelo" id="modelo">
                          <option value="{{$vehiculos->first()->MODELO}}">{{$vehiculo->MODELO}}</option>
                          <option>2018</option>
                          <option>2017</option>
                          <option>2016</option>
                          <option>2015</option>
                          <option>2014</option>
                      </select>
                    </div>

                        <div class="form-group">
                            <label for="pasajeros">pasajeros</label>
                          <select class="form-control" name="pasajeros" id="pasajeros">
                            <option value="{{$vehiculos->first()->PASAJEROS}}">{{$vehiculo->PASAJEROS}}</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                          </select>
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
