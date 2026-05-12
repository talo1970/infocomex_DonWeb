<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

         Schema::disableForeignKeyConstraints();
                
            $this->call(ClaseSeeder::class);
            $this->call(TiposComprobanteSeeder::class);
            $this->call(TiposEntidadSeeder::class);
            $this->call(ProvinciaSeeder::class);
            $this->call(ProductoSeeder::class);
            $this->call(MonedaSeeder::class);

         Schema::enableForeignKeyConstraints();

    }
}
