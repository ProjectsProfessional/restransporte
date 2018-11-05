<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Marca;

class MarcaController extends Controller
{
	public function __construct()
	{

	}

    public function create()
    {
    	$title = 'Definir Marca';
    	return view('MarcaVehiculo.create',compact('title'));
    }

    public function store(request $request)
    {
    	$this->validate($request,[
    		'description' =>'required',
    	]);

    	$data = request()->all();

    	Marca::create([
    		'DESCRIPCION' =>$data['description'],
    	]);
    	return redirect()->route('marca');
    }

}
