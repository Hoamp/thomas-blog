<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => "web-programming"
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => "web-design"
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => "personal"
        ]);

        Post::factory(20)->create();
    }
}
