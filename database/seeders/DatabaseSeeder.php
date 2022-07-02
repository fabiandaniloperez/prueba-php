<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        //\App\Models\Post::factory(120)->create();
        \App\Models\Team::factory(10)->create();
        \App\Models\Match::factory(5)->create();
    }
}
