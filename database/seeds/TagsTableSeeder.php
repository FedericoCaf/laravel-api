<?php

use App\Tag;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Frontend', 'Backend', 'Laravel', 'UX', 'VueJs'];
        foreach ($tags as $tag) {
            $new_tag = new Tag();
            $new_tag->name = $tag;
            $new_tag->slug = Str::slug($tag, '-');
            $new_tag->save();
        }
    }
}
