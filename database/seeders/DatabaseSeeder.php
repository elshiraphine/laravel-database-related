<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Spain',
            'slug' => 'spain',
        ]);

        Category::create([
            'name' => 'Portugal',
            'slug' => 'portugal'
        ]);

        User::factory(5)->create();

        Article::factory(15)->create();
    }
}
