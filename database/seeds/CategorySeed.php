<?php

use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{

    public function run()
    {
        \App\Category::query()->delete();
        $faker = Faker\Factory::create();
         for ($i=0;$i<200000;$i++){
             \App\Category::create([
                 'name'=>$faker->name,
                 'slug'=>$faker->slug,
             ]);
         }
    }
}
