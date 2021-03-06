<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 

            $addImage = new Image();
            $addImage->alt = $faker->sentence(3);
            $addImage->link = $faker->imageUrl(640, 480, 'animals');
            $addImage->caption = $faker->sentence(10);
            //save
            $addImage->save();

        }
    }
}
