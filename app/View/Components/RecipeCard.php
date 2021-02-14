<?php

namespace App\View\Components;

use App\Models\Recipe;
use Illuminate\View\Component;
use Illuminate\Support\Collection;

class RecipeCard extends Component
{
    public \stdClass $recipe;

    public function __construct(\stdClass $recipe)
    {
        $this->recipe = $recipe;
    }

    public function render()
    {
        return view('components.recipe-card');
    }
}
