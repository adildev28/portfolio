<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rapport>
 */
class RapportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'message'=>fake()->text(),
            'type'=>fake()->paragraph(1,true),
            'creator_id'=>fake()->numberBetween(1,10),
            'reported_user'=>fake()->numberBetween(1,10),
        ];
    }
}
