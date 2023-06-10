<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeListing>
 */
class HomeListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       
        return [
            'title' => $this->faker->sentence(4, true),
            'description' => $this->faker->paragraph(10, true),
            'price' => 100.00,

        ];
    }
}
