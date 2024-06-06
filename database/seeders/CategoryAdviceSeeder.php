<?php

namespace Database\Seeders;

use App\Models\CategoryAdvice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryAdviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryAdvice::factory()->count(5)->create();
    }
}
