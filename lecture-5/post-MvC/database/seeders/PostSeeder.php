<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            Post::create([
                "title" => "My title " . $i,
                "main" => null,
                "status" => "active",
                "author_id" => 1,
            ]);
        }

        Post::create([
            "title" => "My Separate Post ",
            "main" => null,
            "status" => "draft",
            "author_id" => 1,
        ]);
    }
}
