<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // Titlu fictiv format din 3 cuvinte
            'author' => $this->faker->name(), // Nume fictiv al autorului
            'year' => $this->faker->numberBetween(1900, date('Y')), // An între 1900 și anul curent
            'description' => $this->faker->paragraph(), // Descriere fictivă
        ];
    }
}