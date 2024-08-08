<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'description' => fake()->paragraph(2),
            'price'=>fake()->numberBetween(0,690),
            'categoryID' => fake()->numberBetween(1,10),
            'SubCategory_id'=>fake()->numberBetween(1,10),
            'product_image' => fake()->image(),
            'second_image' => fake()->image(),            
            'demands'=>fake()->numberBetween(0,20),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
