<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Command>
 */
class CommandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quantity'=>fake()->numberBetween(1,10),
            'user_id'=>fake()->numberBetween(1,15),
            'product_id'=>fake()->numberBetween(1,20),
            'adresse'=>fake()->address(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
