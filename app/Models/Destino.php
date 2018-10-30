<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_DESTINO';
    protected $table = 'TRANS_DESTINO';
    protected $fillable = [
        'ID_DESTINO',
        'NOMBRE',
    ];
}
