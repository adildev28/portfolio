<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Breed::factory(20)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Comment::factory(30)->create();
        \App\Models\Elevage::factory(10)->create();
        \App\Models\Follower::factory(20)->create();
        \App\Models\Panier::factory(20)->create();
        \App\Models\Pet::factory(20)->create();
        \App\Models\Post::factory(25)->create();
        \App\Models\Product::factory(20)->create();
        \App\Models\Profil::factory(20)->create();
        \App\Models\Rapport::factory(10)->create();
        \App\Models\Review::factory(20)->create();
        \App\Models\SubCategorie::factory(10)->create();
        \App\Models\Veterinarian::factory(10)->create();
        \App\Models\Trainer::factory(10)->create();
        \App\Models\Command::factory(10)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
