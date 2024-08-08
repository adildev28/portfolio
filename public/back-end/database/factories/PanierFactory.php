<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Panier>
 */
class PanierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>fake()->numberBetween(1,10),
            'product_id'=>fake()->numberBetween(1,20),
            'quantité'=>fake()->numberBetween(1,10),
            'remise'=>fake()->numberBetween(0,100),
        ];
    }
}
