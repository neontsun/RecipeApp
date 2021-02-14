@extends('layout.main')

@section('title')
   403 | Forbidden
@endsection

@section('content')

   <div class="container mx-auto py-16 px-8 md:px-16">
      <div class="w-full flex flex-col items-center justify-center">
         <h1 class="font-bold text-purple-500 text-10xl md:text-12xl
                    lg:text-18xl">
            403
         </h1>
         <span class="w-full md:w-1/2 text-center text-lg">
            У вас нет доступа для просмотра данной страницы.
         </span>
         <span class="w-full md:w-1/2 text-center text-lg mt-4">
            Вы можете перейти на
            <a href="{{ route('main.index') }}"
               class="text-purple-500 hover:text-blue-700">
               главную страницу
            </a>
            , посмотреть
            <a href="{{ route('recipe.index') }}"
               class="text-purple-500 hover:text-blue-700">
               рецепты
            </a>
            , или воспользоваться
            <a href="{{ route('search.index') }}"
               class="text-purple-500 hover:text-blue-700">
               поиском
            </a>
            .
         </span>
      </div>
   </div>

@endsection
