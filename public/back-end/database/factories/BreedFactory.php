<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Breed>
 */
class BreedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'temperament' => fake()->sentence(),
            'origin' => fake()->country(),
            'description' =>fake()->sentence(),
            'weight' => fake()->randomFloat(2,1,300).' '.fake()->randomElement(['kg','lbs','g']), // Weight in kg (customizable range)
            'length' => fake()->randomFloat(2,1,300).' '.fake()->randomElement(['m','inch','cm']), // Length in cm (customizable range)
            'skin_type' => fake()->randomElement(['Hairless', 'Short Hair', 'Long Hair']),
            'color' => fake()->colorName(),
            'life_span' =>fake()->numberBetween(1,100).' '.fake()->randomELement(['months','years']), // Years (customizable range)
            'diet' => fake()->randomElement(['Carnivore', 'Omnivore', 'Herbivore']),
            'gestation_period' =>fake()->word(), // Days (customizable range)
            'age_of_sexual_maturity' => fake()->word(), // Months (customizable range)
            'age_of_weaning' =>fake()->word(), // Months (customizable range)
            'most_distinctive_feature' =>fake()->sentence(),
            'alt_names' => json_encode([fake()->word(), fake()->word()]), // Example of storing multiple names as JSON
            'adaptability' => fake()->numberBetween(1,5), // Scale of 1 (least) to 5 (most)
            'child_friendly' =>fake()->numberBetween(1,5),
            'energy_level' =>fake()->numberBetween(1,5),
            'health_issues' => fake()->numberBetween(1,5),
            'intelligence' => fake()->numberBetween(1,5), // Scale of 1 (least) to 5 (most)
            'social_needs' => fake()->numberBetween(1,5), // Scale of 1 (least) to 5 (most)
            'stranger_friendly' =>fake()->numberBetween(1,5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
