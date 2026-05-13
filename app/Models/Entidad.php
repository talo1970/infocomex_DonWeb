<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entidad extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'entidades';

    protected $fillable = [
                'tipo_entidad_id',
                'razon_social',
                'cuit',
                'porcentaje_comision',
                'telefono',
                'contacto',
                'mail',
                'dimicilio',
                'numero',
                'departamento_piso',
                'codigo_postal',
                'localidad',
                'provincia_id',
                'pais',
                'modo_factura',
                'codigo_proveedor',
                'observacion',
                'tipo_factura_id',
                'comision_limite',
                'comision_minima',
                'comision_fija',
                'tipo_operacion',
                'vendedor_id'
    ];  
    

}
