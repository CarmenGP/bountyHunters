<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OutlawFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->company(),
            'alias' => $this->faker->firstName($gender = null|'male'|'female'),
            'crime' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'hint' => $this->faker->words($nb = 3, $asText = false),
            'reward' => $this->faker->numberBetween($min = 1000,$max = 9000),
            'description' => $this->faker->realText(),
            'deadline' => $this->faker->dateTime(),
            'gang' => $this->faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt'),
            'img' => $this->faker->imageUrl(),
        ];
    }
}
