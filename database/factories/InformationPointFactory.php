<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServicePointInformations>
 */
class InformationPointFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'hourly' => "9h30-12h00 13h30-18h30 ",
            'address' => $this->faker->streetAddress(),
            'postcode' => $this->faker->postcode(),
            'phone_number' => $this->faker->phoneNumber(),
        ];
    }
}
