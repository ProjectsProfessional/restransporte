<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Piloto;

class PilotoController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {

    }

    public function create()
    {
    	$title = 'Definir Piloto';
    	return view('Piloto.create',compact('title'));
    }

    public function store(request $request)
    {
    	$this->validate($request,[
    		'nombre1' =>'required|max:45',
    		'nombre2' =>'required|max:45',
    		'nombre3' =>'required|max:45',
    		'apellido1' =>'required|max:45',
    		'apellido2' =>'required|max:45',
    		'licencia' =>'required|max:20',
    		'contratacion' =>'required',
    		'baja' =>'required',
    	]);

    	$data = request()->all();

    	Piloto::create([
    		'NOMBRE1' =>$data['nombre1'],
    		'NOMBRE2' =>$data['nombre2'],
    		'NOMBRE3' =>$data['nombre3'],
    		'APELLIDO1' =>$data['apellido1'],
    		'APELLIDO2' =>$data['apellido2'],
    		'LICENCIA' =>$data['licencia'],
    		'FECHA_CONTRATACION' =>$data['contratacion'],
    		'FECHA_RETIRO' =>$data['baja'],

    	]);
    	return redirect()->route('piloto');
    }

    public function destroy()
    {
    	
    }

}
