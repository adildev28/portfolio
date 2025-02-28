<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'creator_id'=>fake()->numberBetween(1,20),
            'title'=>fake()->sentence(),
            'description'=>fake()->sentence(),
            'content'=>fake()->text(),
            'image'=>fake()->image(),
        ];
    }
}
