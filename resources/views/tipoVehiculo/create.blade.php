@extends('dash')
@section('css-template')
    @parent
    <link href="{{asset("css/form-validation.css")}}" rel="stylesheet">
@endsection
@section('content')
<<<<<<< HEAD
   <form class="needs-validation" method="POST" action="">
        
	   
=======
   <form class="needs-validation" method="POST" action="{{url('/tvehiculo')}}">
        {{csrf_field()}}
	   <ul>
	   	@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	   </ul>
>>>>>>> 3705c3a0eddc2039a8f936e623ffe03328265754
        <div class="row">
            <div class="col-6 mb-3">
                <label for="description">Descripción</label>
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
                <a class="btn btn-outline-danger" href="{{route('indextipov')}}">
                <span data-feather="arrow-left-circle"></span>
                Cancelar

              </a>
             </div>

        </div>
            </div>
        </div>

    </form>
@endsection
