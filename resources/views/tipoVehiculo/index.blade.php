@extends('dash')
     
@section('content')
        <div class="container">
            <div class="btn-group mr-2">
                    <a class="btn btn-lg btn-outline-danger " href="{{route('tvehiculo')}}">
                        <span data-feather="arrow-left-circle"></span>
                        Crear
                    </a>
                </div>
            <div class="table-responsive">
        </div>
    <h2>RESUMEN</h2>
        
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Código</th>
                <th>Descripcion</th>
                <th>Detalles</th>
            </tr>
            </thead>
            <tbody>

           
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>
                        <a href="#">
                            <span data-feather="edit"></span>
                            Ver Detalles
                        </a>
                    </td>
                </tr>
            
                <p>NO HAY TIPO DE VEHICULOS DEFINIDOS</p>
            
            </tbody>
        </table>
    </div>

@endsection