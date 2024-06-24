<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            FormularioSeeder::class,
        ]);

        User::create(
            [
                'name' => 'Diego Hurtado Vargas',
                'email' => 'Diego@gmail.com',
                'password' => bcrypt('12345678'),
            ]
        );
        User::create(
            [
                'name' => 'Karol Ortiz Rocha',
                'email' => 'Karito@gmail.com',
                'password' => bcrypt('12345678'),
                'code_censo' => '123',
                'formulario_censo_id' => 1,
            ]

        );
        User::create(
            [
                'name' => 'Rolando Martinez',
                'email' => 'Roly@gmail.com',
                'password' => bcrypt('12345678'),
            ]
        );
    }
}
