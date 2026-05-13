<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contacto extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'apellido',
        'e-mail',
        'telefono',
        'domicilio',
        'numero',
        'departamento_piso',
        'codigo_postal',
        'localidad',
        'provincia_id',
        'pais',
    ];
}
