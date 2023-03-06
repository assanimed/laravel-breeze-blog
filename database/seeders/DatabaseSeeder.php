<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $usr = User::factory()->create([
            'name' => 'mohamed elmhassani',
            'username' => 'assanimed',
        ]);
        Post::factory(10)->create([
            'user_id' => $usr->id,
        ]);
    }
}