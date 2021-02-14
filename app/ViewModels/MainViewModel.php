<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection as Collection;
use Illuminate\Support\Str;
use Spatie\ViewModels\ViewModel;

class MainViewModel extends ViewModel
{
    public EloquentCollection $categories;
    public Collection $recipes;

    /**
     * @param EloquentCollection $categories
     * @param Collection $recipes
     */
    public function __construct(EloquentCollection $categories,
                                Collection $recipes)
    {
        $this->categories = $categories;
        $this->recipes = $recipes;
    }

    public function title() : string
    {
        return 'Поиск рецептов';
    }

    public function categories() : EloquentCollection
    {
        return $this->categories;
    }

    public function recipes() : Collection
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
