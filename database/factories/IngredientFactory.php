<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'units' => $this->faker->randomNumber(1),
            'ingredient' => $this->faker->sentence(2),
            'unit' => $this->faker->randomElement(['g', 'kg', 'cl', 'L', 'lbs', 'tsp', 'tbs', 'gill', 'cup'])
        ];
    }
}
