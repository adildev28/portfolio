<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainer>
 */
class TrainerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' =>fake()->numberBetween(1,4),
            'experience_years'=>fake()->numberBetween(1,20),
            'speciality'=>fake()->word(),
            'elevage_name'=>fake()->name(),
            'city'=>fake()->city(),
            'address'=>fake()->address(),
            'phone'=>fake()->phoneNumber(),
            'mobility'=>fake()->randomElement(['true','false']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
