<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    // db:Seed , sve sto se nalazi unutar run funkcije bice pokrenuto. 
    {
        User::factory(10)->create();

        $this->call([
            //  PostsSeeder::class
            TagSeeder::class
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

// <!-- Drugi Laravelov projekat Blog - vezbe -->