<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\asignaturas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asignaturas>
 */
class AsignaturasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = asignaturas::class;


    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->text(),
            'creditos' => $this->faker->randomDigit(),
            'area' => $this->faker->name(),
            'tipo' => $this->faker->country(),
        ];
    }
}
