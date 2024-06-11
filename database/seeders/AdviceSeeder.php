<?php

namespace Database\Seeders;

use App\Models\Advice;
use Illuminate\Database\Seeder;

class AdviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create 6 advices
        Advice::factory()->count(6)->create();
    }
}

