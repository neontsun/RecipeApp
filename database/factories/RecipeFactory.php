<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(),
            'description' => $this->faker->text,
            'path' => $this->faker->unique()->slug,
            'like_count' => $this->faker->randomDigitNotNull,
            'cooking_time' => $this->faker->randomDigitNotNull . ' min',
            'cooking_ingredient' => $this->faker->word . ',' .
                $this->faker->word,
            'cooking_steps' => $this->faker->text . '[img][/img]' .
                $this->faker->text,
        ];
    }
}
