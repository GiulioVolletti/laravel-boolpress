<?php

use Illuminate\Database\Seeder;
use App\InfoPost;
use App\Post;
use Faker\Generator as Faker;

class InfoPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Post::all();
        foreach($posts as $post){
            $addInfoPost = new InfoPost;

            $addInfoPost->post_id = $post->id;
            $addInfoPost->post_status =  $faker->randomElement(['public', 'private', 'draft']);
            $addInfoPost->comment_status = $faker->randomElement(['open', 'close', 'private']); 

            $addInfoPost->save();
        }
    }
}
