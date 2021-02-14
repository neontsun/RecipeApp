@extends('layout.main')

@section('title')
   Рецепты
@endsection

@section('content')

   <div class="container mx-auto py-16 px-8 md:px-16">

      <div>
         <div class="py-2 mb-4">
            <h2 class="uppercase text-2xl font-bold">
               Все рецепты
            </h2>
         </div>
         <!-- /.header-recipe -->
         <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3
                     xl:grid-cols-5 gap-4">

            @foreach($recipes as $recipe)
               <x-recipe-card :recipe="$recipe"/>
            @endforeach

         </div>
         <div class="mt-8">
            {{ $recipes->links() }}
         </div>
      </div>
      <!-- /.all-recipes -->

   </div>

@endsection
