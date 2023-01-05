<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pacijent>
 */
class PacijentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'datum_rodjenja' => $this->faker->date($format='Y-m-d',$max='now'),
            'br_racuna' => $this->faker->numerify("#####"),
        ];
    }
}
