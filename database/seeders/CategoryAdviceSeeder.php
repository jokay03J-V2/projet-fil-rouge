<?php

namespace Database\Seeders;

use App\Models\CategoryAdvice;
use Illuminate\Database\Seeder;

class CategoryAdviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create 5 category of advices
        CategoryAdvice::factory()->count(5)->create();
    }
}
