<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 10)->create();
        factory(App\Article::class, 100)->create();
    }
    
}
