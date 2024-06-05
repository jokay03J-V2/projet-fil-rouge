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
            'content' => fake()->phoneNumber()
        ];
    }

    public function setCategory(string $categoryId)
    {
        $this->state(fn(array $attributes) => [
            'category_id' => $categoryId,
        ]);
    }
}
