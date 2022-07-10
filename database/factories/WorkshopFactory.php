<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workshop>
 */
class WorkshopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'description'=>fake()->sentences(),
            'facilitator'=>fake()->name(),
            'seats' => rand(10,25),
            'date'=>fake()->date(),
            'time'=>fake()->time(),
            'duration' => rand(1,2),
        ];
    }
}
