<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{

    public function run()
    {
       \App\User::create([
           'name'=>'Admin',
           'email'=>'admin@gmail.com',
           'password'=>bcrypt('admin'),
           'user_type'=>0,
       ]) ;
    }
}
