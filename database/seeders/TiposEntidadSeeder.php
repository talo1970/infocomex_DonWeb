<?php

namespace Database\Seeders;

use App\Models\TiposEntidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposEntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TiposEntidad::create(['nombre' => 'Cliente', 'letra' => 'C']);
        TiposEntidad::create(['nombre' => 'Banco', 'letra' => 'B']);
    }
}
