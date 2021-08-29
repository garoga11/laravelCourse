<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Course::factory(50)->create();
        User::factory(20)->create();
    }
}
