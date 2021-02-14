<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends Controller
{
    #[Route("/search", methods: ["GET"])]
    public function index(Request $request)
    {
//        collect($request->all())->dump();
        return view('search.index');
    }

}
