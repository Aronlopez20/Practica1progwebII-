<?php

namespace Database\Seeders;

use App\Models\Juego;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuegosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Juego::create([
            'titulo' => 'Juego Ejemplo',
            'precio' => 59.99,
            'descripcion' => 'Descripción del juego ejemplo',
            'fecha_lanzamiento' => '2024-09-01'
        ]);
    }
}
