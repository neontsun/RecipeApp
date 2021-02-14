<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\ViewModels\MainViewModel;
use App\ViewModels\RecipesViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Routing\Annotation\Route;

class RecipeController extends Controller
{
    #[Route("/recipes", methods: ["GET"])]
    public function index()
    {
        $recipes = DB::table('recipes as r')
                        ->leftJoin('recipes-comments as rc', 'r.id',
                            '=', 'rc.recipe_id')
                        ->select(DB::raw('
                            r.title as title,
                            r.description as description,
                            r.like_count as like_count,
                            r.path as path,
                            count(rc.recipe_id) as comment_count,
                            r.created_at as created_at
                        '))
                        ->groupBy(
                            'r.title',
                            'rc.recipe_id',
                            'r.description',
                            'r.like_count',
                            'r.path',
                            'r.created_at'
                        )
                        ->orderByDesc('r.created_at')
                        ->paginate(15);

        $viewModel = new RecipesViewModel(
            $recipes
        );

        return view('recipe.index', $viewModel);
    }

    #[Route("/recipe/{path}", methods: ["GET"])]
    public function show($path)
    {
        return view('recipe.show');
    }

}
