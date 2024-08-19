<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'body' => fake()->paragraph(12),
            'address' => fake()->address(),
            'salary' => fake()->numberBetween(20000, 100000),
            'deadline' => fake()->dateTimeBetween('now', '+1 week'),
            'organization_id' => fake()->numberBetween(1, 10),
            'publish' => fake()->numberBetween(0, 1),
        ];
    }
}
