<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kitchen>
 */
class KitchenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_name' => fake()->word(),
            'item_price' => fake()->randomFloat(2, 5, 100), // Random price between 5 and 100
            'item_picture' => fake()->imageUrl(300, 300, 'food'), // Fake image URL
            'review' => fake()->sentence(),
            'description' => fake()->paragraph(),
        ];
    }
}
