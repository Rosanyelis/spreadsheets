<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReporteFactura;

class ReporteFacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReporteFactura::create([
            'numero_planilla' => '21371210', 
            'numero_transaccion' => '3571341117',
        ]);
    }
}
