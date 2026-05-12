<?php

namespace Database\Seeders;

use App\Models\Valor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $valores = [
                    ['nombre' => 'T+1', 'seleccion' => '1'],
                    ['nombre' => 'T+0', 'seleccion' => '0'],
                    ['nombre' => 'T+2', 'seleccion' => '0'],
                    ['nombre' => 'T+3', 'seleccion' => '0'],
                    ['nombre' => 'T+4', 'seleccion' => '0'],
                    ['nombre' => 'T+5', 'seleccion' => '0'],
                    ['nombre' => '48 Horas', 'seleccion' => '0'],
                    ['nombre' => '72 Horas', 'seleccion' => '0']
                ];

            foreach($valores as $valor){
                Valor::create([
                                    'nombre' => $valor['nombre'],
                                    'seleccion' => $valor['seleccion']
                ]);
        }
    }
}
