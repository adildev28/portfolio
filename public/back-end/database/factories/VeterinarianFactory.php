<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Veterinarian>
 */
class VeterinarianFactory extends Factory
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
            'clinic_name'=>fake()->name(),
            'speciality'=>fake()->word(),
            'address'=>fake()->address(),
            'phone'=>fake()->phoneNumber(),
            'experience'=>fake()->numberBetween(1,20),
            'mobility'=>fake()->randomElement(['true','false']),
            'city'=>fake()->city(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
