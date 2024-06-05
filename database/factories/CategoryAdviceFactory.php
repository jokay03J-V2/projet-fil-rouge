<?php

namespace Database\Factories;

use App\Models\CategoryAdvice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryAdvice>
 */
class CategoryAdviceFactory extends Factory
{
    
    protected $model = CategoryAdvice::class;
    // create random data in our database
    
    public function definition(): array
    {
        return [
            'id' => null,
            'name' => fake()->unique()->name(),
        ];
    }
}

