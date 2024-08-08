<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Elevage>
 */
class ElevageFactory extends Factory
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
            'elevage_name'=>fake()->name(),
            'speciality'=>fake()->word(),
            'address'=>fake()->address(),
            'phone'=>fake()->phoneNumber(),
            'years'=>fake()->numberBetween(1,20),
            'space'=>fake()->randomFloat(2, 0, 100) . ' ' . fake()->randomElement(['Km²', 'm²']),
            'city'=>fake()->city(),
            'number_animals'=>fake()->numberBetween(1,1000),
            'url'=>fake()->url(),
        ];
    }
}
