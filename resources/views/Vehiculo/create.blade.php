@extends('dash')
<<<<<<< HEAD


=======
@section('title',$title)
@section('css-template')
    @parent
    <link href="{{asset("css/form-validation.css")}}" rel="stylesheet">
@endsection
>>>>>>> 3705c3a0eddc2039a8f936e623ffe03328265754
@section('content')
    
   <div>

    <div> <h3>INGRESE UN VEHICULO NUEVO</h3></div>
    </div>
       
    <div>
        <div class="row">              
                        <div class="form-group">
                                <label for="marca">Escoja Marca</label>
                                <select class="form-control" name="marca" id="marca" required>
                                  <option>--- Seleccione ---</option>
                                  @foreach($marcas as $marca)
                                   <option value="{{$marca['ID_MARCA'] }}">{{$marca['DESCRIPCION'] }}</option>
                                  @endforeach
                                </select>
                        </div>

                    <div class="form-group">
                                <label for="tipo">Tipo Vehiculo</label>
                                <select class="form-control" name="tipo" id="tipo" required>
                                  <option>--- Seleccione ---</option>
                                  @foreach($tipotransportes as $tipo)
                                  <option value="{{$tipo['ID_TIPO_TRANSPORTE'] }}">{{$tipo['DESCRIPCION'] }}</option>
                                  @endforeach
                                </select>
                    </div>

      </div>         
      <div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa" required>

                </div>
                    <div class="form-group">
                          <label for="modelo">Modelo</label>
                      <select class="form-control" name="modelo" id="modelo">
                          <option>2018</option>
                          <option>2017</option>
                          <option>2016</option>
                          <option>2015</option>
                          <option>2014</option>
                      </select>
                    </div>

                        <div class="form-group">
<<<<<<< HEAD
                                    <label for="exampleFormControlSelect1">Pasajeros</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
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
=======
                            <label for="pasajeros">pasajeros</label>
                          <select class="form-control" name="pasajeros" id="pasajeros">
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
>>>>>>> 3705c3a0eddc2039a8f936e623ffe03328265754
                        </div>
                 </div>
            
        </div>   
         <div>
<<<<<<< HEAD
            <div class="row">
           
                
                    <div class="col-6 mb-3">
                        <label for="description">Placa</label>
                        <input type="text" class="form-control" id="description" name="description" required>

                    </div>
                   
                    
=======
                     <div class="row">
                            <div class="col-6"></div>
                                <div class="col-12">
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <span data-feather="save"></span>
                                        Guardar
                                    </button>
                                </div>
                           </div>
>>>>>>> 3705c3a0eddc2039a8f936e623ffe03328265754
               
            </div> 
            <div class="row">
            <div class="col-6"></div>
            <div class="col-12">
                <button class="btn btn-outline-success">
                    <span data-feather="save"></span>
                    Guardar
                </button>

             </button><div class="btn-group mr-2">
                <a class="btn btn-outline-danger" href="{{route('indexvehiculo')}}">
                <span data-feather="arrow-left-circle"></span>
                Cancelar

              </a>
             </div>

        </div>
            </div>
        </div>
        </div>    
    </form>
@endsection
