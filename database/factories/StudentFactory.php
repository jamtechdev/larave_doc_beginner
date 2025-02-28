<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "email" => fake()->email(),
            "url" => fake()->url(),
            "phone" => fake()->phoneNumber(),
            "address" => fake()->address(),
            "age" => fake()->numberBetween(20, 40),
            "image" => fake()->imageUrl(),
            "about" => fake()->text(),
            "created_at" => now(),
            "updated_at" => now(),

        ];
    }
}
