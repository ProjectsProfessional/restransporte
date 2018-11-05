@extends('dash')
@section('css-template')
    @parent
    <link href="{{asset("css/form-validation.css")}}" rel="stylesheet">
@endsection
@section('content')
   <form class="needs-validation" method="POST" action="{{url('/tvehiculo')}}">
        {{csrf_field()}}
	   <ul>
	   	@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	   </ul>
        <div class="row">
            <div class="col-6 mb-3">
                <label for="description">Descripción</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
        </div>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-12">
                <button class="btn btn-sm btn-outline-secondary">
                    <span data-feather="save"></span>
                    Guardar
                </button>
            </div>
        </div>
    </form>
@endsection
