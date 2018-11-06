<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TipoTransporte;

class TipoTransporteController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $tipos = TipoTransporte::all();
        $title = 'Tipos de Transportes';
        return view('tipoVehiculo.index',compact('tipos','title'));
    }

    public function create()
    {
    	$title = 'Definir Tipo Transporte';
    	return view('tipoVehiculo.create',compact('title'));
    }

    public function details(TipoTransporte $tipo){
       // dd($currency);
        return view('tipoVehiculo.details',compact('tipo'));
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

    public function update(tipoVehiculo $tipo)
    {
        $data = request()->all();

        $tipo->update([
            'DESCRIPCION' => $data['description'],
        ])
        return redirect()->route('tvehiculo');
    }

}
