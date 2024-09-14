<?php

namespace Database\Factories;

use App\Models\Juego;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Juego>
 */
class JuegoFactory extends Factory
{
    protected $model = Juego::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->word,
            'precio' => $this->faker->randomFloat(2, 10, 100),
            'descripcion' => $this->faker->text,
            'fecha_lanzamiento' => $this->faker->date
        ];
    }
}
