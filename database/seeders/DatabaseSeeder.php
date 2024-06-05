<?php

namespace Database\Seeders;

use App\Models\UrgencyCategory;
use App\Models\UrgencyNumber;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        UrgencyCategory::factory(5)->create()->each(function ($model) {
            UrgencyNumber::factory(1, ['category_id' => $model->id])->create();
        });
    }
}
