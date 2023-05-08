<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(4)->create();
        \App\Models\Post::factory(16)->create();
        \App\Models\User::create([
            "name" => "REBCLASSTWO",
            "email" => "admin@gmail.com",
            "password" => bcrypt("aiman010906")
        ]);
        \App\Models\Category::create([
            "name" => "Programmer",
            "slug" => "programmer"
        ]);
        \App\Models\Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);
        \App\Models\Category::create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);
        \App\Models\Category::create([
            "name" => "Desain Grafis",
            "slug" => "desain-grafis"
        ]);
        \App\Models\Category::create([
            "name" => "Mobile Developer",
            "slug" => "mobile-developer"
        ]);
        \App\Models\Category::create([
            "name" => "Web Developer",
            "slug" => "web-developer"
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
