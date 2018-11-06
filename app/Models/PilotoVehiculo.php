<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PilotoVehiculo extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_PILOTO_VEHICULO';
    protected $table = 'TRANS_PILOTO_VEHICULO';
    protected $fillable = [
        'ID_PILOTO_VEHICULO',
        'ID_VEHICULO',
        'ID_PILOTO'
    ];
}
