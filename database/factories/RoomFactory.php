<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'description'=>fake()->sentence($nbWords = 6, $variableNbWords = true),
            'capacity'=>fake()->randomDigit(),
            'dateFrom'=>fake()->date($format = 'Y-m-d', $max = 'now'),
            'dateTo'=>fake()->date($format = 'Y-m-d', $max = 'now'),
            
        ];
    }
}
