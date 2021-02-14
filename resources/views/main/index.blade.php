@extends('layout.main')

@section('title')
   {{ $title }}
@endsection

@section('content')

   <div class="container mx-auto py-16">

      <div class="px-8 md:px-16">
         <div class="flex justify-between items-center py-2 mb-4">
            <h2 class="uppercase text-2xl font-bold">
               Статьи
            </h2>
            <a href="#" class="underline">
               Показать больше
            </a>
         </div>
         <!-- /.header-category -->

         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            <x-article-card :article="123" />
            <x-article-card :article="123" />
            <x-article-card :article="123" />
            <x-article-card :article="123" />
            <x-article-card :article="123" />
            <x-article-card :article="123" />

         </div>
      </div>
      <!-- /.articles -->

      <div class="mt-16 px-8 md:px-16">
         <div class="flex justify-between items-center py-2 mb-4">
            <h2 class="uppercase text-2xl font-bold">
               Категории
            </h2>
            <a href="{{ route('category.index') }}" class="underline">
               Показать больше
            </a>
         </div>
         <!-- /.header-category -->
         <div class="grid grid-cols-3 md:grid-cols-4
                     lg:grid-cols-6 xl:grid-cols-9 gap-4">

            @foreach($categories as $category)
               <x-category-card :category="$category" />
            @endforeach

         </div>
      </div>
      <!-- /.category -->

      <div class="mt-16 px-8 md:px-16">
         <div class="flex justify-between items-center py-2 mb-4">
            <h2 class="uppercase text-2xl font-bold">
               Все рецепты
            </h2>
            <a href="{{ route('recipe.index') }}" class="underline">
               Показать больше
            </a>
         </div>
         <!-- /.header-category -->
         <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3
                     xl:grid-cols-5 gap-4">

            @foreach($recipes as $recipe)
               <x-recipe-card :recipe="$recipe"/>
            @endforeach

         </div>
      </div>
      <!-- /.all-recipes-->

   </div>

   @endsection
