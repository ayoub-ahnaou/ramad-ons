<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Publication;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Publication::factory(10)->create();
        Recipe::factory(10)->create();
        Comment::factory(10)->create();
    }
}
