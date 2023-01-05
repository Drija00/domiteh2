<?php

namespace Database\Factories;
use App\Models\Pacijent;
use App\Models\Lek;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Racun>
 */
class RacunFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'pacijent_id' => random_int(1,Pacijent::count()),
        'lek_id'=> Lek::factory(),
        'datum_od'=> $this->faker->date($format='Y-m-d',$max='now'),
        'datum_do'=> $this->faker->date($format='Y-m-d',$max='now'),
        ];
    }
}
