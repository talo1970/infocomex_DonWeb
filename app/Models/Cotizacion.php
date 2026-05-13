<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cotizacion extends Model
{
    use SoftDeletes;
    
    protected $table = 'cotizaciones';

    protected $fillable = [
           'moneda_id',
           'fecha',
           'cotizacion'
    ];  

}
