<?php

namespace Database\Seeders;

use App\Models\UrgencyCategory;
use App\Models\UrgencyNumber;
use App\Models\InformationPoint;
use App\Models\InformationService;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\InformationPointFactory;
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

        // create category
        UrgencyCategory::factory(5)->create()->each(function ($model) {
            // on each created cateogry, create urgency number with category id
            UrgencyNumber::factory(10, ['category_id' => $model->id])->create();
        });

        $this->call([
            CategoryAdviceSeeder::class,
            AdviceSeeder::class,
        ]);
         InformationPoint::factory(10)->create();

         InformationService::factory(10)->create();
    }
}
