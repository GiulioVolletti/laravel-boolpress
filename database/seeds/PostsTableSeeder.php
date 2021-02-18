<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 

            $addPost = new Post();
            $addPost->title = $faker->sentence(8);
            $addPost->subtitle = $faker->sentence(5);
            $addPost->text = $faker->text(500);
            $addPost->author = $faker->name;
            $addPost->img_path = $faker->imageUrl(640, 480, 'food');
            $addPost->publication_date = $faker->dateTime();
            //save
            $addPost->save();

        }
    }
}
