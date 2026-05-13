<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('entidad_id')->references('id')->on('entidades');

            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('e-mail', 200)->nullable();
            $table->string('telefono', 50)->nullable();
            $table->string('domicilio', 100)->nullable();
            $table->string('numero', 20)->nullable();
            $table->string('departamento_piso', 20)->nullable();
            $table->string('codigo_postal', 20)->nullable();
            $table->string('localidad', 100)->nullable();
            $table->foreignId('provincia_id')->references('id')->on('provincias')->nullable();
            $table->string('pais', 100)->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
