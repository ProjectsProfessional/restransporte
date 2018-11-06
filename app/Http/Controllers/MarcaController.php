<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Marca;

class MarcaController extends Controller
{
	public function __construct()
	{

	}

    public function index()
    {
        $marcas = Marca::all();
        $title = 'Listado de Marcas';
        return view('MarcaVehiculo.index',compact('marcas','title'));
    }

    public function create()
    {
    	$title = 'Definir Marca';
    	return view('MarcaVehiculo.create',compact('title'));
    }

    public function details(Marca $marca){
       // dd($currency);
        return view('MarcaVehiculo.details',compact('marca'));
    }

    public function store(request $request)
    {
    	$this->validate($request,[
    		'description' =>'required|max:24',
    	]);

    	$data = request()->all();

    	Marca::create([
    		'DESCRIPCION' =>$data['description'],
    	]);
    	return redirect()->route('marca');
    }

    public function update(Marca $marca)
    {
        $data = request()->all();

        $marca->update([
            'DESCRIPCION' => $data['description'],
        ])
        return redirect()->route('marca');
    }

}
