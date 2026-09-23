<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Eletrônicos',
            'slug' => 'eletronicos'
        ]);
        
        Category::create([
            'name' => 'Periféricos',
            'slug' => 'perifericos'

        ]);

        Category::create([
            'name' => 'Acessórios',
            'slug' => 'acessorios'
        ]);

        Category::create([
            'name' => 'Hardware',
            'slug' => 'hardware'
        ]);

         Category::create([
            'name' => 'Áudio & Vídeo',
            'slug' => 'audio & video'
        ]);
    }
}
