<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SalleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->randomElement(['Salle Prestige', 'Salle Assurance', 'Salle Essentiel', 'Salle Prestige']),
            'numero' => $this->faker->numberBetween(1,5),
            
            
        ];
    }
}
