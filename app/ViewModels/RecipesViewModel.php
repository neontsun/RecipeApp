<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\ViewModels\ViewModel;

class RecipesViewModel extends ViewModel
{
    public LengthAwarePaginator $recipes;

    public function __construct($recipes)
    {
        $this->recipes = $recipes;
    }

    public function recipes() : LengthAwarePaginator
    {
        foreach ($this->recipes as $recipe) {
            $recipe->title = Str::length($recipe->title) > 65
                ? Str::substr($recipe->title, 0, 62) . '...'
                : $recipe->title;
            $recipe->description = Str::length($recipe->description) > 160
                ? Str::substr($recipe->description, 0, 157) . '...'
                : $recipe->description;
            $recipe->created_at = Carbon::parse($recipe->created_at)
                ->format('d.m.Y');
        }

        return $this->recipes;
    }

}
