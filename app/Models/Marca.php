<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_MARCA';
    protected $table = 'TRANS_MARCA';
    protected $fillable = [
        'ID_MARCA',
        'DESCRIPCION',
    ];
}
