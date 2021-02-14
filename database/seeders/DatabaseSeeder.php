<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Recipe;
use App\Models\RecipeCategory;
use App\Models\RecipeComment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Recipe::factory()->count(1000)->create();
         Category::factory()->count(20)->create();
         Comment::factory()->count(1000)->create();
         RecipeCategory::factory()->count(1000)->create();
         RecipeComment::factory()->count(1000)->create();
    }
}
