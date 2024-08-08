<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reviewer_id'=>fake()->numberBetween(1,20),
            'reviewed_id'=>fake()->numberBetween(1,20),
            'value'=>fake()->randomFloat(1,0,5),
            'comment'=>fake()->paragraph(1,true),
        ];
    }
}
