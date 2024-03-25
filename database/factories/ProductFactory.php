<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(1),
            'catalog_id' => fake()->numberBetween(1,10),
            'price' => fake()->numberBetween(100,1000),
            'fulldescription' => fake()->sentence(10),
            'description' => fake()->sentence(5),
            'articul' => Str::random(10),
            'picture' => Str::random(10),
        ];
    }
}
