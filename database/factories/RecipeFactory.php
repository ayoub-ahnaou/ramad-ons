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
            'title' => fake()->sentence(3), // Titre aléatoire
            'description' => fake()->paragraph(4), // Description aléatoire
            'time' => fake()->time(), // Heure au format HH:MM:SS
            'persons' => fake()->numberBetween(1, 10), // Nombre de personnes
            'ingredients' => fake()->paragraph(2), // Liste d'ingrédients fictive
            'image' => fake()->imageUrl(640, 480, 'food', true, 'Recipe'), // URL d'image fictive
        ];
    }
}
