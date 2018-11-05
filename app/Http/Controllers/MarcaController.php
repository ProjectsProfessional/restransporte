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
    		'code' => 'required',
    		'description' =>'required',
    	]);

    	$data = request()->all();

    	Marca::create([
    		'ID_MARCA' =>$data['code'],
    		'DESCRIPCION' =>$data['description'],
    	]);
    	return redirect()->route('marca');
    }

}
