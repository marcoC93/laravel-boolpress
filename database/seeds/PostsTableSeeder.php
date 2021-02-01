<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = config('posts');

        for ($i=0; $i <10 ; $i++) {
            $newPost= new Post();
            $newPost->name = $faker->name(10);
            $newPost->lastname = $faker->lastname(10);
            $newPost->save();
        }
    }
}
