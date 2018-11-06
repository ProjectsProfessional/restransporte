<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Piloto extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_PILOTO';
    protected $table = 'TRANS_PILOTO';
    protected $fillable = [
        'ID_PILOTO',
        'NOMBRE1',
        'NOMBRE2',
        'NOMBRE3',
        'APELLIDO1',
        'APELLIDO2',
        'LICENCIA',
        'FECHA_CONTRATACION',
        'FECHA_RETIRO',
        'ESTADO'
    ];
}
