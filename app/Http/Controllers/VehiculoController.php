<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vehiculo;
use App\Models\Marca;
use App\Models\TipoTransporte;
use DB;


class VehiculoController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $vehiculos = Vehiculo::all();
        $title = 'Listado de Vehiculos';
        return view('Vehiculo.index',compact('vehiculos','title'));
    }

    public function create()
    {
    	$marcas = Marca::all();
    	$tipotransportes = TipoTransporte::all();

    	$title = 'Nuevos Vehiculos';
    	return view('Vehiculo.create',compact('tipotransportes','marcas','title'));
    }

     public function details(Vehiculo $vehiculo){
       // dd($currency);
        return view('Vehiculo.details',compact('vehiculo'));
    }      

    public function store()
    {
    	$data = request()->all();

    	Vehiculo::create([
    		'ID_MARCA' => $data['marca'],
    		'ID_TIPO_TRANSPORTE' => $data['tipo'],
    		'PLACA' => $data['placa'],
    		'MODELO' => $data['modelo'],
    		'PASAJEROS' => $data['pasajeros'],
    	]);
    	return redirect()->route('vehiculo');
    }

    public function update(Vehiculo $vehiculo)
    {
        $data = request()->all();

        $vehiculo->update([
            'ID_MARCA' =>$data['marca'],
            'ID_TIPO_TRANSPORTE' =>$data['tipo'],
            'PLACA' =>$data['placa'],
            'MODELO' =>$data['modelo'],
            'PASAJEROS' =>$data['pasajeros'],
        ])
        return redirect()->route('vehiculo');
    }    
}
