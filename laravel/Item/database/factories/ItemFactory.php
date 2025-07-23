<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true),
            'price' => fake()->randomFloat(2, 10, 500),
            'stock' => fake()->numberBetween(1, 100),
            'description' => fake()->sentence(),
            'status' => fake()->randomElement(['available', 'unavailable']),
            'category_id' => Category::inRandomOrder()->first()->id ?? 1,
        ];
    }
}
