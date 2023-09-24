<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DocumentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tracking_no' => fake()->numberBetween($min = 1, $max = 100),
            'subject' => fake()->word(),
            'type' => fake()->randomElement(['DTR', 'DB']),
            'remarks' => fake()->randomElement(['None', 'Thanks']),
            'division_id' => fake()->numberBetween($min = 1, $max = 11),
            'creator_id' => fake()->numberBetween($min = 1, $max = 11),
            'route_to_division_id' => fake()->numberBetween($min = 1, $max = 11),
            'acted_by_user_id' => fake()->numberBetween($min = 1, $max = 11),
        ];
    }
}
