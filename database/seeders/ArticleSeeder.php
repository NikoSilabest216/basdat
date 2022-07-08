<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'Review Maklo',
            'isi' => 'MUUUANTAPP BROH',
            'preview' => 'Maklo sangat hebat',
            'author_id'=>1
        ]);
    }
}
