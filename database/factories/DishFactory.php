<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
        // dummy post data
    {
        return [
            'recipe_name' => $this->faker->sentence(3), // 3 words
            'description' => $this->faker->sentence(20), // 20 words
            'serve' => $this->faker->randomNumber(1),
            'preparation_time' => $this->faker->time,
            'cooking_time' => $this->faker->time,
            'image' => $this->faker->imageUrl(),
            'category_id' => $this->faker->randomNumber(1),
        ];
    }
}
