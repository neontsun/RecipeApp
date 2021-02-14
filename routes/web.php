<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@index')->name('main.index');

Route::get('/search', 'SearchController@index')
    ->name('search.index');

Route::get('/category', 'CategoryController@index')
    ->name('category.index');

Route::get('/category/{path}', 'CategoryController@show')
    ->name('category.show');

Route::get('/recipes', 'RecipeController@index')
    ->name('recipe.index');

Route::get('/recipes/{path}', 'RecipeController@show')
    ->name('recipe.show');
