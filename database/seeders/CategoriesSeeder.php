<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'niko'],
            ['name' => 'silabest'],
            ['name' => 'mental'],
            ['name' => 'tempe'],
        ];

        foreach ($data as $category) {
            Category::create($category);
        }

    }
}
