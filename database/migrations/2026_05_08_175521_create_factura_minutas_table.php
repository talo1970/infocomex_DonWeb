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
        Schema::create('factura_minutas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('factura_id')->references('id')->on('facturas');
            $table->foreignId('minuta_id')->references('id')->on('minutas');
            //ver
            $table->foreignId('producto_id')->references('id')->on('productos');

            $table->timestamps();   

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura_minutas');
    }
};
