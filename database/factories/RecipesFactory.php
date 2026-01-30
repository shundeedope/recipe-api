<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipes>
 */
class RecipesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'meal_type_id' => $this->faker->randomDigit(),
            'difficulty_id' => $this->faker->randomDigit(),
            'servings' => $this->faker->numberBetween(1, 15),
            'photo_url' => $this->faker->imageUrl(),
            'source_id' => $this->faker->randomDigit(),
            'source_recipe_url' => $this->faker->url(),
        ];
    }
}
