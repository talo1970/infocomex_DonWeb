<?php

namespace Database\Seeders;

use App\Models\Recibo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReciboSeeder extends Seeder
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
                Recibo :: create ([ 
                    'numero' => $data [ '0' ],
                    'fecha' => $data [ '1' ],
                    'entidad_id' => $data [ '4' ],
                    'concepto' => $data [ '5' ],
                    'observacion' => $data [ '6' ],
                    'efectivo' => $data [ '7' ],
                    'retencion_afip' => $data [ '8' ],
                    'retencion_dgr' => $data [ '9' ],
                    'numero_cheque' => $data [ '10' ],
                    'banco_cheque' => $data [ '11' ],
                    'importe_cheque' => $data [ '12' ],
                    'otro_1' => $data [ '13' ],
                    'otro_1_importe' => $data [ '14' ],
                    'otro_2' => $data [ '15' ],
                    'otro_2_importe' => $data [ '16' ],
                    'total' => $data [ '21' ],
                    'retencion_afip_cumplida' => $data [ '22' ],
                    'retencion_dgr_cumplida' => $data [ '23' ],
                    'estado' => $data [ '24' ],
                    'generado' => $data [ '28' ],
                    'firma_id' => $data [ '29' ],
                    'vendedor_id' => $data [ '31' ],
                ]); 
            } 
            $firstline = false ; 
        } 
        fclose ( $csvFile );
    }
}
