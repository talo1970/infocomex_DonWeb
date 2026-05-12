<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacturaRecibo extends Model
{
    protected $table = 'factura_recibos';
    protected $fillable = [
        'factura_id',
        'recibo_id',
    ];

    public function factura()
    {
        return $this->belongsTo(Factura::class, 'factura_id');
    }

    public function recibo()
    {
        return $this->belongsTo(Recibo::class, 'recibo_id');
    }

}