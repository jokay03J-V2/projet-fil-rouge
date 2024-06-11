<?php

namespace Database\Seeders;

use App\Models\UrgencyCategory;
use App\Models\UrgencyNumber;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoryAdviceSeeder::class,
            AdviceSeeder::class,
            UrgencyNumberSeeder::class,
            InformationPointSeeder::class,
            UserSeeder::class,
        ]);

    }
}
