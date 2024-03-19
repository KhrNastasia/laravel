<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Catalog;
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

    protected $prod = Product::class;

    public function definition(): array
    {
        return [
            'name' => fake()->sentence(2),
            'catalog_id' => Catalog::factory(),
            'price' => '10',
            'fulldescription' => fake()->sentence(10),
            'description' => fake()->sentence(5),
            'articul' => Str::random(10),
            'picture' => Str::random(10),
        ];
    }
}

