<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\ViewModels\ViewModel;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class CategoryViewModel extends ViewModel
{
    public string $categoryName;
    public LengthAwarePaginator $recipes;

    public function __construct(string $categoryName,
                                LengthAwarePaginator $recipes)
    {
        $this->categoryName = $categoryName;
        $this->recipes = $recipes;
    }

    public function title() : string
    {
        return $this->categoryName;
    }

    public function categoryName() : string
    {
        return $this->categoryName;
    }

    public function recipes() : LengthAwarePaginator
    {
        foreach ($this->recipes as $recipe) {
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

        return $this->recipes;
    }
}
