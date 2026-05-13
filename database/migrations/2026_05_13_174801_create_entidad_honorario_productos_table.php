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
        Schema::create('entidad_honorario_productos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('entidad_id')->references('id')->on('entidades');
            $table->unsignedInteger('honorario_id');
            $table->foreignId('producto_id')->references('id')->on('productos');
            $table->decimal('importe', 10, 2)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entidad_honorario_productos');
    }
};
