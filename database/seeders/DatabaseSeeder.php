<?php

namespace Database\Seeders;

use App\Models\UrgencyCategory;
use App\Models\UrgencyNumber;
use App\Models\InformationPoint;
use App\Models\InformationService;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            CategoryAdviceSeeder::class,
            AdviceSeeder::class,
            UrgencyNumberSeeder::class
        ]);
         InformationPoint::factory(10)->create();

         InformationService::factory(10)->create();
    }
}
