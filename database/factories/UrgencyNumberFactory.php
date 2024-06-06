<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UrgencyNumber>
 */
class UrgencyNumberFactory extends Factory
{

    protected static ?string $categoryId;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->realText(50),
            'content' => fake()->phoneNumber(),
            'hourly' => '24h/24h'
        ];
    }
}
