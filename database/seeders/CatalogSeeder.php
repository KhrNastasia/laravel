<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalog;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $woman_clothes = Catalog::create([
            'name'=>'Женская одежда',
        ]);

        $man_clothes = Catalog::create([
            'name'=>'Мужская одежда',
        ]);

        $child_clothes = Catalog::create([
            'name'=>'Детская одежда',
        ]);

        $accesories = Catalog::create([
            'name'=>'Аксессуары',
        ]);

        Catalog::create([
            'name'=>'Обувь женская',
            'parent_id'=>$woman_clothes->id,
        ]);

        Catalog::create([
            'name'=>'Обувь мужская',
            'parent_id'=>$man_clothes->id,
        ]);

        Catalog::create([
            'name'=>'Обувь детская',
            'parent_id'=>$child_clothes->id,
        ]);

    }
}
