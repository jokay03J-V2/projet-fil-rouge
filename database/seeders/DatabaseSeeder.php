<?php

namespace Database\Seeders;

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
         InformationPoint::factory(10)->create();

         InformationService::factory(10)->create();
//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
