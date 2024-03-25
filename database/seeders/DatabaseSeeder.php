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

//        $this->call(CatalogSeeder::class);

//         \App\Models\User::factory(10)->create();
<<<<<<< HEAD
         \App\Models\Product::factory(10)->create();
=======
         \App\Models\Product::factory(20)->create();
>>>>>>> 3d10a21103a9eb146805bbbe31b16c06e3a58067

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
