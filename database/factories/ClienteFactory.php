<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber
        ];
    }
}
