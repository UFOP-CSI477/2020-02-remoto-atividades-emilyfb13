<?php

namespace Database\Factories;

use App\Models\Vacina;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacinaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacina::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=>$this->faker->randomElement(['Pfizer', 'Janssen', 'CoronaVac', 'AstraZeneca']),
            'fabricante'=>$this->faker->randomElement(['Butantan', 'Johnson', 'Sinovac', 'Oxford']),
            'doses'=>$this->faker->randomElement(['1000', '2000', '3000', '4000'])
        ];
    }
}
