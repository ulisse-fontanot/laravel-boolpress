<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newTag = new Tag();
            $newTag->name = $faker->words(3, true);

            $slug = Str::slug($newTag->name);
            $slugIniziale = $slug;
            $tagPresente = Tag::where('slug', $slug)->first();
            $contatore = 1;
            while ($tagPresente) {
                $slug = $slugIniziale . '-' . $contatore;
                $contatore++;
                $tagPresente = Tag::where('slug', $slug)->first();
            }
            $newTag->slug = $slug;

            $newTag->save();
        }
    }
}
