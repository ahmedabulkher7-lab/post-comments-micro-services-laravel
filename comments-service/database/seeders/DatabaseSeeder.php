<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

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
    Comment::create(['post_id' => 1, 'author_name' => 'Ahmed','comment' => 'مقال رائع!',]);
    Comment::create(['post_id' => 1, 'author_name' => 'yasser', 'comment' => 'Great post!']);
    Comment::create(['post_id' => 1, 'author_name' => 'Sara', 'comment' => 'Very informative.']);
    Comment::create(['post_id' => 2, 'author_name' => 'Omar', 'comment' => 'Thanks for sharing.']);

    }
}
