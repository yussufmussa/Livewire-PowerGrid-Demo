<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => fake()->text(maxNbChars:5),
            'traveler_name' => fake()->text(maxNbChars:6),
            'booking_date' => now(),
            'status' => fake()->boolean(),
            'price' => rand(10,100)
        ];
    }
}
