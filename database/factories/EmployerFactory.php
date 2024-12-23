<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->hasProfile(),
            'name' => fake()->company(),
            'phone_number' => fake()->phoneNumber(),
            'logo' => 'holder.js/400x400?text=Test image',
            'identifier'=>fake()->uuid(),
        ];
    }
}
