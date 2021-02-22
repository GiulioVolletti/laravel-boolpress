<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;


class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $tags = [
            'tag1',
            'tag2',
            'tag3',
            'tag4',
       ];
       foreach($tags as $tag){
        $addTag = new Tag();
        $addTag->name = $tag;
        $addTag->slug = Str::slug($tag);
        $addTag->save();
       };
    }
}
