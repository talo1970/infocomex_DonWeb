<?php

namespace Database\Seeders;

use App\Models\TiposComprobante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposComprobanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TiposComprobante::create(['nombre' => 'Factura A', 'tipo' => 'factura', 'abreviado' => 'Fac A']);
        TiposComprobante::create(['nombre' => 'Recibo', 'tipo' => 'recibo', 'abreviado' => 'Rec']);
        TiposComprobante::create(['nombre' => 'Nota de Debito', 'tipo' => 'nota_debito', 'abreviado' => 'ND']);
        TiposComprobante::create(['nombre' => 'Factura B', 'tipo' => 'factura', 'abreviado' => 'Fac B']);
        TiposComprobante::create(['nombre' => 'Nota de Credito', 'tipo' => 'nota_credito', 'abreviado' => 'NC']);
        TiposComprobante::create(['nombre' => 'Factura AD', 'tipo' => 'factura', 'abreviado' => 'Fac Do']);
        TiposComprobante::create(['nombre' => 'Factura E', 'tipo' => 'factura', 'abreviado' => 'Fac E']);
        
    }
}
