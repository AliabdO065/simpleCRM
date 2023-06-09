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
        \App\Models\User::factory(20)->create();
        \App\Models\Client::factory(20)->create();
        \App\Models\Task::factory(20)->create();
        \App\Models\project::factory(20)->create();
    }
}
