<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;

    protected $fillable = [
            'nombre',
            'letra',
            'honorario',
            'abraviado',
            'color',
            'color_web',
            'tabla'
    ];
}
