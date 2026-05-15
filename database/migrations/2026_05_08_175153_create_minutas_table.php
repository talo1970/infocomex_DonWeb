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
        Schema::create('minutas', function (Blueprint $table) {
            //$table->id();
            $table->uuid('id')->primary();

            $table->foreignId('producto_id')->references('id')->on('productos');
            $table->unsignedBigInteger('id_original')->nullable();
            $table->unsignedBigInteger('numero')->nullable();
            $table->string('periodo', 8)->nullable();
            $table->date('fecha'); 
            $table->foreignId('estado_id')->references('id')->on('estados');
            $table->foreignId('comprador_id')->references('id')->on('entidades');
            $table->foreignId('vendedor_id')->references('id')->on('entidades');
            $table->foreignId('moneda_id')->references('id')->on('monedas');
            $table->foreignId('clase_id')->references('id')->on('clases');
            $table->foreignId('valor_id')->references('id')->on('valores');
 
            $table->decimal('importe', 10, 2)->nullable();
            $table->decimal('tipo_cambio', 10, 2)->nullable();
            $table->decimal('equivalente', 10, 2)->nullable();

            $table->foreignId('referencia_id')->references('id')->on('referencias');
            $table->foreignId('tipo_documento_id')->references('id')->on('tipos_documentos');
            $table->text('observacion')->nullable();

            $table->decimal('comision_comprador', 3, 2)->nullable();
            $table->decimal('importe_comision_comprador', 10, 2)->nullable();

            $table->decimal('comision_vendedor', 3, 2)->nullable();
            $table->decimal('importe_comision_vendedor', 10, 2)->nullable();

            $tipo_operacion = ['C','Exportación', 'Importación', 'Mercado'];
            $table->enum('operacion', $tipo_operacion)->default(null);         

            $table->foreignId('factura_cliente_id')->references('id')->on('facturas');
            $table->foreignId('factura_banco_id')->references('id')->on('facturas');
            //usuario_vendedor_id
            $table->foreignId('usuario_vendedor_id')->nullable()->references('id')->on('usuarios')->nullable();

            $table->foreignId('entidad_cliente_id')->nullable()->references('id')->on('entidades');

            //$table->string('afip')->nullable();
            $table->boolean('afip')->nullable();
            //bcra_id
            $table->foreignId('bcra_id')->nullable()->references('id')->on('entidades');
            $table->year('anio_desde')->nullable();
            $table->year('anio_hasta')->nullable();
            $table->unsignedInteger('anio_cantidad')->nullable();
            
            $table->string('periodo_desde', 8)->nullable();
            $table->string('periodo_hasta', 8)->nullable();
            $table->unsignedInteger('periodo_cantidad')->nullable();

            $table->decimal('importe_comision_unidad', 10, 2)->nullable();
            $table->decimal('importe_comision_dolares', 10, 2)->nullable();
            $table->decimal('importe_comision', 10, 2)->nullable();
            $table->unsignedInteger('cantidad')->nullable();
            
            $table->unsignedInteger('plazo')->nullable();
            $table->date('fecha_vencimiento')->nullable();

            $table->uuid('padre_id')->nullable();
            $table->uuid('hijo_id')->nullable();
//usuario_id_created
//created_at
//usuario_id_updated
//updated_at
//usuario_id_deleted
//deleted_at
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minutas');
    }
};
