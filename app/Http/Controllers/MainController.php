<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\ViewModels\MainViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Method;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    #[Route("/", methods: ["GET"])]
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
                        ->take(5)
                        ->get();

        $categories =  Category::all()->take(9);

        $viewModel = new MainViewModel(
            $categories,
            $recipes
        );

        return view('main.index', $viewModel);
    }

}
