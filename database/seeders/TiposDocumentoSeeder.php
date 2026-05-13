<?php

namespace Database\Seeders;

use App\Models\TiposDocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                //cotizaciones :: truncate (); 
        $csvFile = fopen ( base_path ( 'database/data/tipodoc.csv' ), 'r' ); 
        $firstline = true ; 
        while (( $data = fgetcsv ( $csvFile , 2000 , ',' )) !== false ) { 
            // var_dump($data);
            if (! $firstline ) { 
                TiposDocumento :: create ([ 
                    'id' => $data [ '0' ],
                    'nombre' => $data [ '1' ],
                    'seleccion' => 0
                ]); 
            } 
            $firstline = false ; 
        } 
        fclose ( $csvFile );
    }
}
