<?php

namespace Database\Seeders;

use App\Models\UrgencyCategory;
use App\Models\UrgencyNumber;
use Illuminate\Database\Seeder;

class UrgencyNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create category
        UrgencyCategory::factory(5)->create()->each(function ($model) {
            // on each created cateogry, create urgency number with category id
            UrgencyNumber::factory(10, ['category_id' => $model->id])->create();
        });
    }
}
