<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\ViewModels\CategoriesViewModel;
use App\ViewModels\CategoryViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends Controller
{
    #[Route("/category", methods: ["GET"])]
    public function index()
    {
        $recipesForCategory = collect();
        $categories =  Category::all();

        foreach($categories as $category) {
            $recipe = DB::table('recipes as r')
                    ->leftJoin('recipes-comments as rcom', 'r.id',
                        '=', 'rcom.recipe_id')
                    ->join('recipes-categories as rc',
                        'rc.recipe_id', '=', 'r.id')
                    ->join('categories as c', 'c.id', '=',
                        'rc.category_id')
                    ->select(DB::raw('
                        r.title as title,
                        r.description as description,
                        r.like_count as like_count,
                        r.path as path,
                        count(rcom.recipe_id) as comment_count,
                        r.created_at as created_at
                    '))
                    ->where('c.name', '=', $category->name)
                    ->groupBy(
                        'r.title',
                        'rcom.recipe_id',
                        'r.description',
                        'r.like_count',
                        'r.path',
                        'r.created_at'
                    )
                    ->orderByDesc('r.like_count')
                    ->take(5)
                    ->get();

            if ($recipe->isNotEmpty()) {
                $recipesForCategory
                    ->push(collect([$category->name => $recipe]));
            }
        }

        $viewModel = new CategoriesViewModel(
            $categories,
            $recipesForCategory
        );

        return view('category.index', $viewModel);
    }

    #[Route("/category/{path}", methods: ["GET"])]
    public function show($path)
    {
        $category = Category::where('path', $path)->get();

        if ($category->isEmpty()) {
            return response(view('errors.404'), 404);
        }

        $recipes = DB::table('recipes as r')
                    ->leftJoin('recipes-comments as rcom', 'r.id',
                        '=', 'rcom.recipe_id')
                    ->join('recipes-categories as rc',
                        'rc.recipe_id', '=', 'r.id')
                    ->select(DB::raw('
                        r.title as title,
                        r.description as description,
                        r.like_count as like_count,
                        r.path as path,
                        count(rcom.recipe_id) as comment_count,
                        r.created_at as created_at
                    '))
                    ->where('rc.category_id', '=',
                        $category[0]->id)
                    ->groupBy(
                        'r.title',
                        'rcom.recipe_id',
                        'r.description',
                        'r.like_count',
                        'r.path',
                        'r.created_at'
                    )
                    ->orderByDesc('r.created_at')
                    ->take(5)
                    ->paginate(15);

        $viewModel = new CategoryViewModel(
            $category[0]->name,
            $recipes
        );

        return view('category.show', $viewModel);
    }

}
