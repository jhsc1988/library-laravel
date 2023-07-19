<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Jasmin',
            'surname' => 'Husić',
            'email' => 'admin@library.com',
            'role'=> 'admin',
            'password'=> 'adminpass1234'
        ]);

        User::create([
            'name' => 'Hrvoje',
            'surname' => 'Horvat',
            'email' => 'user@library.com',
            'role'=> 'user',
            'password'=> 'userpass1234'
        ]);
    }
}
