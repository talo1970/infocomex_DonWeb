<?php

namespace Database\Seeders;

use App\Models\Referencia;
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
            $this->call(CodigoVentaSeeder::class);
            $this->call(TiposComprobanteSeeder::class);
            $this->call(TiposEntidadSeeder::class);
            $this->call(ProvinciaSeeder::class);
            $this->call(ProductoSeeder::class);
            $this->call(MonedaSeeder::class);
            $this->call(ValorSeeder::class);
            $this->call(SucursalSeeder::class);
            $this->call(ReferenciaSeeder::class);
            $this->call(CotizacionSeeder::class);
            $this->call(NotaSeeder::class);
            $this->call(TiposDocumentoSeeder::class);
            $this->call(HonorarioProductoSeeder::class);

            $this->call(EntidadSeeder::class);
            $this->call(ContactoSeeder::class);
            $this->call(EstadoSeeder::class);
            $this->call(FacturaMinutaSeeder::class);
            $this->call(EntidadHonorarioProductoSeeder::class);

         Schema::enableForeignKeyConstraints();

    }
}
