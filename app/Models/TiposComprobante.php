<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposComprobante extends Model
{
    protected $table = "tipos_comprobantes";
    
    protected $fillable = ['nombre', 'tipo', 'abreviado'];

}
