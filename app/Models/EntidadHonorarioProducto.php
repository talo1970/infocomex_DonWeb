<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntidadHonorarioProducto extends Model
{
    protected $fillable = [
                    'entidad_id',
                    'honorario_id',
                    'producto_id',
                    'importe'
            ];
}
