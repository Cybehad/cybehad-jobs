<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\User;
use App\Models\UserProfile;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        $user = User::factory()->hasProfile()->create();
//        Employer::factory()->hasJobs(5)->create([
//            'user_id' => $user->id,
//        ]);

        $this->call(JobSeeder::class);
    }
}
