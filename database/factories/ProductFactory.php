<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
use Illuminate\Support\Str;
=======
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Catalog;
>>>>>>> 3d10a21103a9eb146805bbbe31b16c06e3a58067

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
