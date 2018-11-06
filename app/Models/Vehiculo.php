<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_VEHICULO';
    protected $table = 'VEHICULO';
    protected $fillable = [
        'ID_VEHICULO',
        'ID_MARCA',
        'ID_TIPO_TRANSPORTE',
        'PLACA',
        'MODELO',
        'PASAJEROS',
    ];
}
