<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Spatie\ViewModels\ViewModel;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection as Collection;

class CategoriesViewModel extends ViewModel
{
    public EloquentCollection $categories;
    public Collection $recipesForCategory;

    public function __construct(EloquentCollection $categories,
                                Collection $recipesForCategory)
    {
        $this->categories = $categories;
        $this->recipesForCategory = $recipesForCategory;
    }

    public function title() : string
    {
        return 'Категории';
    }

    public function categories() : EloquentCollection
    {
        return $this->categories;
    }

    public function recipesOnCategories() : Collection
    {
        foreach ($this->recipesForCategory as $category) {
            foreach ($category as $recipes) {
                foreach ($recipes as $recipe) {
                    $recipe->title = Str::length($recipe->title) > 65
                        ? Str::substr($recipe->title, 0, 62)
                            . '...'
                        : $recipe->title;
                    $recipe->description = Str::length($recipe->description) > 160
                        ? Str::substr($recipe->description, 0, 157)
                            . '...'
                        : $recipe->description;
                    $recipe->created_at = Carbon::parse($recipe->created_at)
                        ->format('d.m.Y');
                }
            }
        }

        return $this->recipesForCategory;
    }
}
