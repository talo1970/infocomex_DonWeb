<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Minuta extends Model
{
    use SoftDeletes;

    protected $fillable = [
            'producto_id',
            'id_original',
            'numero',
            'periodo',
            'fecha',
            'estado_id',
            'comprador_id',
            'vendedor_id',
            'moneda_id',
            'clase_id',
            'valor_id',
            'importe',
            'tipo_cambio',
            'equivalente',
            'referencia_id',
            'tipo_documento_id',
            'observacion',
            'comision_comprador',
            'importe_comision_comprador',
            'comision_vendedor',
            'importe_comision_vendedor',
            'operacion',
            'factura_cliente_id',
            'factura_banco_id',
            'usuario_vendedor_id',
            'entidad_cliente_id',
            'afip',
            'bcra_id',
            'anio_desde',
            'anio_hasta',
            'anio_cantidad',
            'periodo_desde',
            'periodo_hasta',
            'periodo_cantidad',
            'importe_comision_unidad',
            'importe_comision_dolares',
            'importe_comision',
            'cantidad',
            'plazo',
            'fecha_vencimiento',
            'padre_id',
            'hijo_id',
            ];


}
