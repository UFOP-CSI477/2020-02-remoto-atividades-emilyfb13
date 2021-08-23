<?php

namespace Database\Factories;

use App\Models\Dado;
use Illuminate\Database\Eloquent\Factories\Factory;

class DadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->firstNameFemale(),
            'sobrenome' => $this->faker->lastName(),
            'cidade' => $this->faker->city(),
            'estado' => $this->faker->state()
        ];
    }
}
