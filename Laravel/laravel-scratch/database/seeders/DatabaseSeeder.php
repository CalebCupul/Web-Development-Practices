<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
    {
        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);
        
        Post::factory(10)->create([
            'user_id' => $user->id
        ]);


        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum vero tempora sequi nisi officiis ut ipsa vitae praesentium assumenda accusamus voluptates cumque, dolorem aliquid itaque iusto incidunt magni cum facilis!'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum vero tempora sequi nisi officiis ut ipsa vitae praesentium assumenda accusamus voluptates cumque, dolorem aliquid itaque iusto incidunt magni cum facilis!'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-third-post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum vero tempora sequi nisi officiis ut ipsa vitae praesentium assumenda accusamus voluptates cumque, dolorem aliquid itaque iusto incidunt magni cum facilis!'
        // ]);
        
    }
}
