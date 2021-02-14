@extends('layout.main')

@section('title')
   {{ $title }}
@endsection

@section('content')

   <div class="container mx-auto py-16 px-8 md:px-16">

      <div class="category">
         <div class="py-2 mb-4">
            <h2 class="uppercase text-2xl font-bold">
               Все категории
            </h2>
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

      @foreach($recipesOnCategories as $category)

         <div class="mt-16">
            <div class="py-2 mb-4">
               <h2 class="uppercase text-2xl font-bold">
                  Популярное в категории "{{ $category->keys()->all()[0] }}"
               </h2>
            </div>
            <!-- /.header-category -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3
                     lg:grid-cols-4 xl:grid-cols-5 gap-4">

               @foreach($category as $recipes)
                  @foreach($recipes as $recipe)
                     <x-recipe-card :recipe="$recipe"/>
                  @endforeach
               @endforeach

            </div>
         </div>
         <!-- /.popular-in-category-->

      @endforeach

   </div>

@endsection
