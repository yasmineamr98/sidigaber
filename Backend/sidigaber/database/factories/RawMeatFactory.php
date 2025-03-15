<?php

namespace Database\Factories;

use App\Models\RawMeat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RawMeat>
 */
class RawMeatFactory extends Factory
{
    protected $model = RawMeat::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Beef',
            'Chicken',
            'Lamb',
            'Turkey',
            'Veal',
            'Duck',
            'Goat',
            'Venison',
            'Bison'
        ];

        $qualities = ['economy', 'standard', 'premium'];

        return [
            'name' => $this->faker->unique()->words(3, true),
            'description' => $this->faker->optional(0.8)->sentence(10),
            'price' => $this->faker->randomFloat(2, 5, 150),
            'category' => $this->faker->randomElement($categories),
            'weight' => $this->faker->randomFloat(2, 0.1, 5),
            'quality' => $this->faker->randomElement($qualities),
            'is_available' => $this->faker->boolean(80) // 80% chance of being available
        ];
    }

    public function available(): Factory
    {
        return $this->state(function () {
            return [
                'is_available' => true
            ];
        });
    }

    public function unavailable(): Factory
    {
        return $this->state(function () {
            return [
                'is_available' => false
            ];
        });
    }

    public function premium(): Factory
    {
        return $this->state(function () {
            return [
                'quality' => 'premium',
                'price' => $this->faker->randomFloat(2, 50, 200)
            ];
        });
    }

    public function economy(): Factory
    {
        return $this->state(function () {
            return [
                'quality' => 'economy',
                'price' => $this->faker->randomFloat(2, 5, 30)
            ];
        });
    }

    public function standard(): Factory
    {
        return $this->state(function () {
            return [
                'quality' => 'standard',
                'price' => $this->faker->randomFloat(2, 20, 80)
            ];
        });
    }
}
