<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservaVehiculo extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_RESERVA_VEHICULO';
    protected $table = 'TRANS_RESERVA_VEHICULO';
    protected $fillable = [
        'ID_RESERVA_VEHICULO',
        'ID_VEHICULO',
        'ID_RESERVA',
        'FECHA_INICIAL',
        'FECHA_FINAL',
        'PRECIO',
    ];
}
