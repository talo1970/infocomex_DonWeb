<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
                    ['nombre' => 'BOLETOS', 'letra' => 'C', 'honorario' => 0, 'abraviado' => 'Boletos', 'color' => '14737632', 'color_web' => null, 'tabla' => 'boletos'],
                    ['nombre' => 'BONO FISCAL', 'letra' => 'F', 'honorario' => 0, 'abraviado' => 'B. Fiscal', 'color' => '', 'color_web' => null, 'tabla' => 'boletos_bono'],
                    ['nombre' => 'COM A 6401', 'letra' => 'G', 'honorario' => 1, 'abraviado' => 'C.A - 6401', 'color' => '12632319', 'color_web' => null, 'tabla' => 'boleto_3602'],
                    ['nombre' => 'ORDEN DE PAGOS NUEVAS', 'letra' => 'H', 'honorario' => 0, 'abraviado' => 'O. Pago', 'color' => '', 'color_web' => null, 'tabla' => 'orden_pago'],
                    ['nombre' => 'ORDEN DE PAGOS VENCIDAS', 'letra' => 'I', 'honorario' => 0, 'abraviado' => 'O. Pago vto', 'color' => '', 'color_web' => null, 'tabla' => 'orden_pago_v'],
                    ['nombre' => 'APP Suscripción DVH', 'letra' => 'D', 'honorario' => 1, 'abraviado' => 'Subcrip', 'color' => '49344', 'color_web' => null, 'tabla' => 'boleto_dape'],
                    ['nombre' => 'SUBCRIPCIONES BCRA', 'letra' => 'U', 'honorario' => 1, 'abraviado' => 'Subcrip BCRA', 'color' => '12632064', 'color_web' => null, 'tabla' => 'subcrip_bcra'],
                    ['nombre' => 'SUBCRIPCIONES DOBLES', 'letra' => '8', 'honorario' => 1, 'abraviado' => 'Subcrip Doble', 'color' => '16777152', 'color_web' => null, 'tabla' => 'subcrip_doble'],
                    ['nombre' => 'PRECIO DE TRANSFERENCIA', 'letra' => '9', 'honorario' => 1, 'abraviado' => 'P Transf.', 'color' => '8421631', 'color_web' => null, 'tabla' => 'precio_transferencia'],
                    ['nombre' => 'FORMULARIO-2668', 'letra' => '10', 'honorario' => 1, 'abraviado' => 'F - 2668', 'color' => '8421631', 'color_web' => null, 'tabla' => 'minuta_f2668'],
                    ['nombre' => 'FORMULARIO-2672', 'letra' => '11', 'honorario' => 1, 'abraviado' => 'F - 2672', 'color' => '8421631', 'color_web' => null, 'tabla' => 'minuta_f2672'],
                ];
         
        foreach($productos as $producto){
                Producto::create([
                                    'nombre' => $producto['nombre'],
                                    'letra' => $producto['letra'],
                                    'honorario' => $producto['honorario'],
                                    'abraviado' => $producto['abraviado'],
                                    'color' => $producto['color'],
                                    'color_web' => $producto['color_web'],
                                    'tabla' => $producto['tabla']
                ]);
        }

    }
}