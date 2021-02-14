<?php

namespace Database\Factories;

use App\Models\RecipeComment;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RecipeComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'recipe_id' => $this->faker->numberBetween(1, 1000),
            'comment_id' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
