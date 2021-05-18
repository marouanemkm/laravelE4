<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Article;
use App\Models\Category;
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
        \App\Models\Article::factory(20)->create();
    }
}
