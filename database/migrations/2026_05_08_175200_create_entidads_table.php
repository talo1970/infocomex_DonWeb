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
        Schema::create('entidades', function (Blueprint $table) {
            //$table->id();
            $table->uuid('id')->primary();

            $table->foreignId('tipo_entidad_id')->references('id')->on('tipos_entidades');
            $table->string('razon_social', 100);// ->unique();
            $table->unsignedBigInteger('cuit')->nullable();
            $table->decimal('porcentaje_comision', 10, 2)->nullable();
            $table->string('telefono', 50)->nullable();
            $table->string('contacto', 100)->nullable();
            $table->string('mail', 50)->nullable();
            $table->string('dimicilio', 100)->nullable();
            $table->string('numero', 50)->nullable();
            $table->string('departamento_piso', 50)->nullable();
            $table->string('codigo_postal', 50)->nullable();
            $table->string('localidad', 50)->nullable();
            $table->foreignId('provincia_id')->references('id')->on('provincias');
            $table->string('pais', 50)->nullable();
            //el contacto 2 es en la tabla de contacto
            $modo_factura = ['Bimestral', 'Mensual'];
            $table->enum('modo_factura', $modo_factura)->default(null);
            $table->string('codigo_proveedor', 50)->nullable();
            $table->string('observacion', 50)->nullable();
            //tipo de comprobante que tipo de facura es el cliente
            $table->foreignId('tipo_factura_id')->references('id')->on('tipos_comprobantes');
            $table->decimal('comision_limite', 10, 2)->nullable();
            $table->decimal('comision_minima', 10, 2)->nullable();
            $table->decimal('comision_fija', 10, 2)->nullable();
            
            $tipo_operacion = ['Exportación', 'Importación'];
            $table->enum('tipo_operacion', $tipo_operacion)->default(null);

            $table->foreignId('vendedor_id')->nullable()->references('id')->on('users');
                        
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entidades');
    }
};
