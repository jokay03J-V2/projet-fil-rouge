<?php

namespace Database\Seeders;

use App\Models\UrgencyCategory;
use App\Models\UrgencyNumber;
use App\Models\InformationPoint;
use App\Models\InformationService;
use App\Models\ServicePointInformation;
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
         $points = InformationPoint::factory(5)->create();

         $services = InformationService::factory(5)->create();
        $points->each(function ($point) use ($services) {
            $services->each(function ($service) use ($point) {
                ServicePointInformation::create(['service_id' => $service->id, 'information_id' => $point->id]);
            });
        });
    }
}
