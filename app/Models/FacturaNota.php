<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacturaNota extends Model
{
    protected $table = 'factura_notas';
    protected $fillable = [
        'factura_id',
        'nota_id',
    ];
    
}
