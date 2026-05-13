<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clase extends Model
{
    use SoftDeletes;

    protected $table = 'clases';

    protected $fillable = [
            'nombre',
            'seleccion'
    ];  
}
