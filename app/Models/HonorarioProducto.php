<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HonorarioProducto extends Model
{
    protected $fillable = [
                    'honorario_id',
                    'producto_id'
                ];
}
