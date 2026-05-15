<?php

namespace Database\Seeders;

use App\Models\Entidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //entidades :: truncate (); 
        $csvFile = fopen ( base_path ( 'database/data/entidades.csv' ), 'r' ); 
        $firstline = true ; 
        while (( $data = fgetcsv ( $csvFile , 2000 , ',' )) !== false ) { 
            // var_dump($data);
            if (! $firstline ) { 
                Entidad :: create ([ 
                    'id' => $data [ '0' ],
                    'tipo_entidad_id' => $data [ '1' ],
                    'razon_social' => $data [ '2' ],
                    'cuit' => $data [ '3' ],
                    'porcentaje_comision' => $data [ '4' ],
                    'telefono' => $data [ '5' ],
                    'contacto' => $data [ '6' ],
                    'mail' => $data [ '7' ],
                    'dimicilio' => $data [ '8' ],
                    'numero' => $data [ '9' ],
                    'departamento_piso' => $data [ '10' ],
                    'codigo_postal' => $data [ '11' ],
                    'localidad' => $data [ '12' ],
                    'provincia_id' => $data [ '13' ],
                    'pais' => $data [ '14' ],

//            $modo_factura = ['Bimestral', 'Mensual'];
                    'modo_factura' => ($data [ '18' ] == 'B'? 'Bimestral': 'Mensual'),
                    'codigo_proveedor' => $data [ '19' ],
                    'observacion' => $data [ '20' ],
            //tipo de comprobante que tipo de facura es el cliente
                    'tipo_factura_id' => $data [ '25' ],
                    'comision_limite' => $data [ '28' ],
                    'comision_minima' => $data [ '30' ],
                    'comision_fija' => $data [ '31' ],
            
            //$tipo_operacion = ['Exportación', 'Importación'];
                    'tipo_operacion' => ($data [ '29' ] == 'E'? 'Exportación': 'Importación'),
                    'vendedor_id' => $data [ '27' ],
                ]); 
            } 
            $firstline = false ; 
        } 
        fclose ( $csvFile );
    }
}
