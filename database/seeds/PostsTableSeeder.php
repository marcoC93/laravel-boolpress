<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
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

        for ($i=0; $i <10 ; $i++) {
            $newPost= new Post();
            $newPost->title = $faker->sentence(10);
            $newPost->content = $faker->text(500);
            // Genero lo slug
            $slug = Str::slug($newPost->title , '-') ;
            // verifico che lo slug non esista nel database
            $post_presente= Post::where('slug', $slug)->first();
            $contatore=1;
            while ($post_presente) {
                $slug = $slug . '-' . $contatore;
                $contatore ++;
                $post_presente= Post::where('slug', $slug)->first();
            }
            // salvo lo slug all'interno del record e quindi viene aggiunto nella tabella
            $newPost->slug = $slug;
            $newPost->save();
        }
    }
}
