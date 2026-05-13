<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Moneda extends Model
{
    use SoftDeletes;

    protected $table = 'monedas';

    protected $fillable = [
            'nombre',
            'simbolo',
            'pais',
            'seleccion'
    ];  
}
