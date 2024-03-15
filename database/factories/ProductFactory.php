<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => 'Майка',
            'catalog_id' => '4',
            'price' => '10',
            'fulldescription' => 'Майка желтая мягкая пушистая',
            'description' => 'Майка желтая',
            'articul' => '121212',
            'picture' => 'sdfsdf',
        ];
    }
}

