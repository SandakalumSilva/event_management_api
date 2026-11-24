<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->sentence(3),
            'description' => fake()->text(),
            'start_date' => fake()->dateTimeBetween('now','+1 month'),
            'end_date' => fake()->dateTimeBetween('+1 month', '+2 months'),
            'user_id' => User::factory(),
        ];
    }
}
