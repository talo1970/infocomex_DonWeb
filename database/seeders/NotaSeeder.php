<?php

namespace Database\Seeders;

use App\Models\Nota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //nota :: truncate (); 
        $csvFile = fopen ( base_path ( 'database/data/nota_credito.csv' ), 'r' ); 
        $firstline = true ; 
        while (( $data = fgetcsv ( $csvFile , 2000 , ',' )) !== false ) { 
            // var_dump($data);
            if (! $firstline ) { 
                Nota :: create ([ 
                    //'id' => $data [ '0' ],
                    //'tipo_nota' => 'credito',
                    'tipo_Nota' => 'credito',  
                    'punto_venta' => $data [ '1' ],
                    'numero' => $data [ '2' ],
                    'fecha' => $data [ '3' ],
                    'entidad_id' => $data [ '5' ],
                    'concepto' => $data [ '6' ],
                    'observacion' => $data [ '7' ],
                    'efectivo' => $data [ '8' ],
                    'porcentaje_impuesto' => $data [ '9' ],
                    'importe_impuesto' => $data [ '10' ],
                    'total' => $data [ '11' ],
                    'estado' => $data [ '12' ],
                    'vendedor_id' => $data [ '15' ]
                ]); 
            } 
            $firstline = false ; 
        } 
        fclose ( $csvFile );


        //nota :: truncate (); 
        $csvFile = fopen ( base_path ( 'database/data/nota_debito.csv' ), 'r' ); 
        $firstline = true ; 
        while (( $data = fgetcsv ( $csvFile , 2000 , ',' )) !== false ) { 
            // var_dump($data);
            if (! $firstline ) { 
                Nota :: create ([ 
                    //'id' => $data [ '0' ],
                    //'tipo_nota' => 'credito',
                    'tipo_Nota' => 'debito',  
                    'punto_venta' => $data [ '1' ],
                    'numero' => $data [ '2' ],
                    'fecha' => $data [ '3' ],
                    'entidad_id' => $data [ '5' ],
                    'concepto' => $data [ '6' ],
                    'observacion' => $data [ '7' ],
                    'efectivo' => $data [ '8' ],
                    'porcentaje_impuesto' => $data [ '9' ],
                    'importe_impuesto' => $data [ '10' ],
                    'total' => $data [ '11' ],
                    'estado' => $data [ '12' ],
                    'vendedor_id' => $data [ '15' ]
                ]); 
            } 
            $firstline = false ; 
        } 
        fclose ( $csvFile );




    }
}
