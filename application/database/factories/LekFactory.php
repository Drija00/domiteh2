<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lek>
 */
class LekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'JKL'=> $this->faker->numerify("######"),
            'naziv'=> $this->faker->word(),
            'cena' => $this->faker->randomDigit(),
            'strucni_naziv'=> $this->faker->word(),
        ];
    }
}
