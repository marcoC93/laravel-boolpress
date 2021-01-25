<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostTableSeeder extends Seeder
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
            $newPost->author = $faker->name;
            $newPost->length = $faker->length;
            $newPost->prova = $faker->prova;
            $newPost->save();
        }
    }
}
