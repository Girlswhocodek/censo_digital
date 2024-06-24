<?php

namespace Database\Seeders;

use App\Models\FormularioCenso;
use App\Models\Persona;
use App\Models\PersonaVivienda;
use App\Models\TipoVivienda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormularioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoVivienda::create([
            'tipo_vivienda_name' => 'Local no construído para habitación ocupado',
        ]);

        PersonaVivienda::create([
            'cantidad_personas_vivienda' => 'Una sola',
        ]);

        FormularioCenso::create([
            'tipo_vivienda_id' => '1',
            'persona_vivienda_id' => '1',
        ]);

        Persona::create([
            'nombre' => 'Roly',
            'rol' => 'Jefa, jefe o persona de referencia',
            'sexo' => 'Hombre',
            'edad' => 45,
            'formulario_censo_id' => '1',
        ]);
        Persona::create([
            'nombre' => 'Angelica',
            'rol' => 'Cónyuge o pareja',
            'sexo' => 'Mujer',
            'edad' => 43,
            'formulario_censo_id' => '1',
        ]);
    }
}
