<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Events>
 */
class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event' => $this->faker->sentence(3),
            'slug' => $this->faker->unique()->slug(3),
            'description' => $this->faker->paragraph(3),
            'status' => $this->faker->boolean(50)
        ];
    }
}
