<?php

namespace Database\Seeders;

use App\Models\Factura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //facturas :: truncate (); 
        $csvFile = fopen ( base_path ( 'database/data/facturas.csv' ), 'r' ); 
        $firstline = true ; 
        while (( $data = fgetcsv ( $csvFile , 2000 , ',' )) !== false ) { 
            // var_dump($data);
            if (! $firstline ) { 
                Factura :: create ([ 
                    'id' => $data [ '0' ],
                    'puesto_venta' => $data [ '1' ],
                    'numero' => $data [ '2' ],
                    'tipo_factura' => $data [ '3' ],
                    'fecha' => $data [ '5' ],
                    'producto_id' => $data [ '6' ],
                    'entidad_id' => $data [ '8' ],
                    'importe_detalle' => $data [ '9' ],
                    'subtotal' => $data [ '10' ],
                    'bonificacion' => $data [ '11' ],
                    'porcentaje_impuesto' => $data [ '12' ],
                    'importe_impuesto' => $data [ '13' ],
                    'total' => $data [ '14' ],
                    'detalle' => $data [ '15' ],
                    'saldo_anterior' => $data [ '16' ],
                    'total_a_pagar' => $data [ '21' ],
                    'estado' => $data [ '22' ],
                    'estado_pago' => $data [ '23' ],
                    'especial' => $data [ '24' ],
                    'importe_minimo' => $data [ '28' ],
                    'tipo_cambio' => $data [ '29' ],
                    'total_dolares' => $data [ '30' ],
                    'vendedor_id' => $data [ '31' ],
                ]); 
            } 
            $firstline = false ; 
        } 
        fclose ( $csvFile );
    }
}
