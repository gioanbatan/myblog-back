<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {

            $post = new Post();

            $post->title = $faker->unique()->word();
            $post->content = $faker->text(150);
            $post->slug = Helpers::generateSlug($post->title);

            $post->save();
        }
    }
}
