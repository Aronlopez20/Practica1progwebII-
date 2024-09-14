<?php

namespace Database\Factories;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    protected $model = Pedido::class;

    public function definition()
    {
        return [
            'id_cliente' => \App\Models\Cliente::factory(),
            'id_juego' => \App\Models\Juego::factory(),
            'cantidad' => $this->faker->numberBetween(1, 5),
            'fecha_pedido' => $this->faker->date,
            'total' => $this->faker->randomFloat(2, 10, 100)
        ];
    }
}
