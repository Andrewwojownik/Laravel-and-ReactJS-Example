<?php

namespace Database\Seeders;

use App\Models\User;
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
        \App\Models\Project::factory(5)->create();
        \App\Models\Task::factory(500)->create();

        /**
         * @var User $admin
         */
        $admin = \App\Models\User::where('id', '=', 1)->first();
        $admin->is_admin = 1;
        $admin->save();
    }
}
