<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
//        $this->call(CategorySeed::class);
//        $this->call(UserSeed::class);
        //$this->call(SeedFlagIcons::class);
        $this->call(SeedSettings::class);
    }
}
