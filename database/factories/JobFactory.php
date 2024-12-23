<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(),
            'salary' => fake()->randomElement(['1,000 USD', '500 USD', '4,000 USD', '400 USD']),
            'location' => 'remote',
            'schedule' => fake()->randomElement(['Full Time', 'Part Time']),
            'url'=>fake()->url(),
            'featured'=> fake()->randomElement([true, false]),
            'identifier'=>fake()->uuid(),
        ];
    }
}
