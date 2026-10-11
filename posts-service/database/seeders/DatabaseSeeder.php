<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Post::create(['title' => 'First Post', 'content' => 'This is the first article content.']);
        Post::create(['title' => 'Second Post', 'content' => 'This is another interesting movie.']);
        Post::create(['title' => 'Third Post', 'content' => 'This is another interesting series.']);
        Post::create(['title' => 'Fourth Post', 'content' => 'This is another interesting game.']);
    }
    
}
