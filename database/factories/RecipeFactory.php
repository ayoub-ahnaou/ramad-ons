<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(4),
            'time' => fake()->time(),
            'persons' => fake()->numberBetween(1, 10),
            'ingredients' => fake()->paragraph(2),
            'image' => fake()->imageUrl(640, 480, 'food', true, 'Recipe'),
            'category' => fake()->randomElement(["Entree", "Principale", "Desert"]),
        ];
    }
}
