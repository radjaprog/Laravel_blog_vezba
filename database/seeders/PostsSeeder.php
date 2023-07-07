<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(10)->make()->each(function ($post) {
            $user = User::inRandomOrder()->first();

            $user->posts()->save($post);
        });
    }
}

// <!-- Drugi Laravelov projekat Blog - vezbe -->