<?php

namespace Database\Seeders;

use App\Models\Proyeccion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proyeccion::create([
            // 'costo' => 100000000,
            'habitantes' => 12615000,
            'extranjeros' => 165000,
            'habitantes_santa_cruz' => 3600000,
        ]);
        Proyeccion::create([
            // 'costo' => 100000000,
            'habitantes' => 13750000,
            'extranjeros' => 190510,
            'habitantes_santa_cruz' => 5259000,
        ]);
        Proyeccion::create([
            // 'costo' => 100000000,
            'habitantes' => 17055000,
            'extranjeros' => 165000,
            'habitantes_santa_cruz' => 8922000,
        ]);
    }
}
