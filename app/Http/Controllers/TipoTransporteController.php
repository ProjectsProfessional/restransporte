<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TipoTransporte;

class TipoTransporteController extends Controller
{
    public function __construct()
    {

    }

    public function create()
    {
    	$title = 'Definir Tipo Transporte';
    	return view('tipoVehiculo.create',compact('title'));
    }

    public function store(request $request)
    {
    	$this->validate($request,[
    		'description' =>'required|max:24',
    	]);

    	$data = request()->all();

    	TipoTransporte::create([
    		'DESCRIPCION' =>$data['description'],
    	]);
    	return redirect()->route('tvehiculo');
    }

}
