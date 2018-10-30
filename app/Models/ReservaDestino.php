<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservaDestino extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_RESERVA_DESTINO';
    protected $table = 'TRANS_RESERVA_DESTINO';
    protected $fillable = [
        'ID_RESERVA_DESTINO',
        'ID_DESTINO',
    ];
}
