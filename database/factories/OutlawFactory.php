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
            'alias' => $this->faker->company(),
            'crime' => $this->faker->company(),
            'hint' => $this->faker->company(),
            'reward' => $this->faker->biasedNumberBetween($min = 100, $max = 10000, $function = 'sqrt'),
            'description' => $this->faker->realText(),
            'deadline' => $this->faker->dateTime(),
            'gang' => $this->faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            'img' => $this->faker->imageUrl(),
            'vip' => $this->faker->boolean(),
            'img' => $this->faker->imageUrl(),
            'vip'=>$this->faker->boolean()
        ];
    }
}
