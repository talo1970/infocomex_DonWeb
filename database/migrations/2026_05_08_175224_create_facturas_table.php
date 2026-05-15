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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();

            $table->string('puesto_venta');
            $table->unsignedBigInteger('numero');
            $table->string('tipo_factura');
            
            //$table->foreignId('tipo_comprobante_id')->references('id')->on('entidades');
            //$table->unsignedBigInteger('tipo_comprobante_id');
            $table->date('fecha');
            $table->foreignId('producto_id')->references('id')->on('productos')->nullable();
            //$table->string('Tipo_Entidad');
            $table->foreignId('entidad_id')->references('id')->on('entidades');
            $table->decimal('importe_detalle', 10, 2)->nullable();
            $table->decimal('subtotal', 10, 2)->nullable();
            //ver de sacar
            $table->decimal('bonificacion', 10, 2)->nullable();
            $table->decimal('porcentaje_impuesto', 10, 2)->nullable();
            $table->decimal('importe_impuesto', 10, 2)->nullable();
            $table->decimal('total', 10, 2)->nullable();
            $table->text('detalle')->nullable();
            $table->decimal('saldo_anterior', 10, 2)->default(0);
            // ver de precuntar a Oscar
            //$table->decimal('DetAtraso', 10, 2);
            //$table->decimal('ImpAtraso', 10, 2);
            //$table->decimal('DetCheRec', 10, 2);
            //$table->decimal('ImpCheRec', 10, 2);
            $table->decimal('total_a_pagar', 10, 2);
            $table->string('estado')->nullable();
            //$table->string('Rec_Nro');
            $table->string('estado_pago')->nullable();
            $table->boolean('especial')->default(false);
            //$table->decimal('Det_Bonifi', 10, 2);
            $table->decimal('importe_minimo', 10, 2)->nullable();
            $table->decimal('tipo_cambio', 10, 2)->nullable();
            $table->decimal('total_dolares', 10, 2)->nullable();
            //$table->unsignedBigInteger('vendedor_id');
            $table->foreignId('vendedor_id')->references('id')->on('usuarios')->nullable();
    
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
