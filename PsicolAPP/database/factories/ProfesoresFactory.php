<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\profesores;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesores>
 */
class ProfesoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = profesores::class;


    public function definition()
    {
        return [
            'documento' => $this->faker->unique()->randomNumber(9, true),
            'nombres' => $this->faker->name(),
            'telefono' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->email(),
            'direccion' => $this->faker->address(),
            'ciudad' => $this->faker->country(),
        ];
    }
}
