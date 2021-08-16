<?php

namespace Database\Seeders;

use App\Models\Check;
use App\Models\Comments;
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
        // \App\Models\User::factory(10)->create();
        Check::factory(30)->create();
        Comments::factory(60)->create();
    }
}
