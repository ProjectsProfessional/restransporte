<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoTransporte extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_TIPO_TRANSPORTE';
    protected $table = 'TRANS_TIPO_TRANSPORTE';
    protected $fillable = [
        'ID_TIPO_TRANSPORTE',
        'DESCRIPCION',
    ];
}
