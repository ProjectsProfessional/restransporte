@extends('dash')
     
@section('content')
        <div class="container">
            <div class="btn-group mr-2">
                    <a class="btn btn-lg btn-outline-danger " href="{{route('piloto')}}">
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
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Vencimiento-Licencia</th>
                <th>Fecha-Contratacion</th>
                <th>Fecha-Baja</th>
                <th>Detalles</th>
            </tr>
            </thead>
            <tbody>

           
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
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
            
                <p>NO HAY PILOTOS DEFINIDOS</p>
            
            </tbody>
        </table>
    </div>

@endsection