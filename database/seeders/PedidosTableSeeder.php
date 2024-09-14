<?php

namespace Database\Seeders;

use App\Models\Pedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Pedido::create([
            'id_cliente' => 1,
            'id_juego' => 1,
            'cantidad' => 1,
            'fecha_pedido' => '2024-09-01',
            'total' => 59.99
        ]);
    }
}
