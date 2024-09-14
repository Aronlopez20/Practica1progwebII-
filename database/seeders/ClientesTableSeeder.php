<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Cliente::create([
            'nombre' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'direccion' => 'Calle Falsa 123',
            'telefono' => '123456789'
        ]);
    }
}
