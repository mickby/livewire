<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Greeting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\ArticleFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();



        Greeting::create([
            'greeting' => 'Hello',
        ]);

        Greeting::create([
            'greeting' => 'Hi',
        ]);

        Greeting::create([
            'greeting' => 'Howdy',
        ]);

        Greeting::create([
            'greeting' => 'Yo',
        ]);

        Article::factory()
            ->count(50)
            ->create();

    }
}
