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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();

            $tipo_nota = ['credito', 'debito'];
            $table->enum('tipo_Nota', $tipo_nota);  
            $table->string('punto_venta');
            $table->unsignedBigInteger('numero');
            $table->date('fecha');
            $table->foreignId('entidad_id')->references('id')->on('entidades');
            $table->string('concepto')->nullable();
            $table->text('observacion')->nullable();
            $table->decimal('efectivo', 10, 2)->nullable();
            $table->decimal('porcentaje_impuesto', 10, 2)->nullable();
            $table->decimal('importe_impuesto', 10, 2)->nullable();
            $table->decimal('total', 10, 2)->nullable();
            $table->string('estado')->nullable();
            $table->foreignId('vendedor_id')->references('id')->on('usuarios');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
