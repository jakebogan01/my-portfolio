<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\About;
use App\Models\Skill;
use App\Models\Project;
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
        User::factory()
            ->hasAttached(Project::factory()->count(2))
            ->hasAttached(Skill::factory()->count(2))
            ->count(2)
            ->create();
        About::factory()->count(1)->create();
    }
}
