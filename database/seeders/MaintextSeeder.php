<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maintext;

class MaintextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Maintext::create([
            'name'=>'About Us',
            'body'=>'qwerty uiopo asdfg zxcvb kl',
            'url'=>'about_us',
            'lang'=>'en'
        ]);

        Maintext::create([
            'name'=>'О нас',
            'body'=>'Что-то интересное про нас',
            'url'=>'about_us',
            'lang'=>'ru'
        ]);
    }
}
