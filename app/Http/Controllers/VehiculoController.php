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

    }

    public function create()
    {
    	$marcas = Marca::all();
    	$tipotransportes = TipoTransporte::all();

    	$title = 'Nuevos Vehiculos';
    	return view('Vehiculo.create',compact('tipotransportes','marcas','title'));
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
}
