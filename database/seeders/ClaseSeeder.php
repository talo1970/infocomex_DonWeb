<?php

namespace Database\Seeders;

use App\Models\clase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        clase::create(['nombre' => 'Divisas', 'seleccion' => '1']);
        clase::create(['nombre' => 'Billetes', 'seleccion' => '0']);
    }
}
