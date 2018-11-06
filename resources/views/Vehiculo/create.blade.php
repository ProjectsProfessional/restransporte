@extends('dash')


@section('content')
    
   <div>

    <div> <h3>INGRESE UN VEHICULO NUEVO</h3></div>
    </div>
       
    <div>
        <div class="row">
                 <div class ="col-6 mb-3">
                        <label label for="code">Código</label>
                        <input type="text" class="form-control" id="code" name="code" required>
                </div>
                 
                
                  
                        <div class="form-group">
                                <label for="exampleFormControlSelect1">Marca</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Honda</option>
                                  <option>Kia</option>
                                  <option>Toyota</option>
                                  <option>Hyundai</option>
                                  <option>Ford</option>
                                </select>
                        </div>

                    <div class="form-group">
                                <label for="exampleFormControlSelect1">Tipo Vehiculo</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Sedan</option>
                                  <option>Suv</option>
                                  <option>Coster</option>
                                  <option>MicroBus</option>
                                </select>
                    </div>

      </div>         
      <div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="description">Descripción</label>
                    <input type="text" class="form-control" id="description" name="description" required>

                </div>
                    <div class="form-group">
                                    <label for="exampleFormControlSelect1">Modelo</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>2018</option>
                                      <option>2017</option>
                                      <option>2016</option>
                                      <option>2015</option>
                                      <option>2014</option>
                                    </select>
                            </div>

                        <div class="form-group">
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
                        </div>
                 </div>
            
        </div>   
         <div>
            <div class="row">
           
                
                    <div class="col-6 mb-3">
                        <label for="description">Placa</label>
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
