@extends('layout.main')

@section('title')
   Поиск
@endsection

@section('content')

   <div
      x-data="{
         tab: 'recipes'
      }"
      class="container mx-auto py-16">

      <div class="flex w-full px-8 md:px-16">

         <button :class="{ 'tab-active': tab === 'recipes' }"
                 @click="tab = 'recipes'"
                 class="px-8 py-2 outline-none focus:outline-none">
            Рецепты
         </button>

         <button :class="{ 'tab-active': tab === 'article' }"
                 @click="tab = 'article'"
                 class="px-8 py-2 outline-none focus:outline-none">
            Статьи
         </button>

      </div>
      <!-- /.tabs-panel -->

      <div x-show="tab === 'recipes'"
           class="px-8 md:px-16">

         <div class="mt-4">
            Показано
            <strong>1550</strong>
            рецептов по запросу
            <strong>паста</strong>
         </div>
         <!-- /.count -->
         <div
            class="mt-8 flex justify-between flex-col md:flex-row">

            <div class="w-full md:w-72">

               <div x-data="{ categoryOpen: true }" class="border-b">

                  <button
                     @click="
                        if(categoryOpen === true) {
                           categoryOpen = false;
                        }
                        else {
                           categoryOpen = true;
                        }
                     "
                     class="outline-none focus:outline-none cursor-pointer
                           hover:text-gray-500 uppercase flex items-center
                           group pb-2">
                     По категории блюд
                     <svg :class="{ 'arrow-rotate': categoryOpen }"
                          x="0px"
                          y="0px"
                          viewBox="0 0 451.847 451.847"
                          class="w-2.5 h-2.5 ml-2 fill-current
		                           group-hover:text-gray-500">
                        <g>
                           <path d="M225.923,354.706c-8.098,
                              0-16.195-3.092-22.369-9.263L9.27,
                              151.157c-12.359-12.359-12.359-32.397,0-44.751
                                 c12.354-12.354,32.388-12.354,44.748,0l171.905,
                                 171.915l171.906-171.909c12.359-12.354,
                                 32.391-12.354,44.744,0
                                 c12.365,12.354,12.365,32.392,0,44.751L248.292,
                                 345.449C242.115,351.621,234.018,
                                 354.706,225.923,354.706z"/>
                        </g>
                        <g></g><g></g><g></g><g></g>
                        <g></g><g></g><g></g><g></g>
                        <g></g><g></g><g></g><g></g>
                        <g></g><g></g><g></g>
                     </svg>
                  </button>

                  <ul x-show="categoryOpen"
                      class="h-96 overflow-y-scroll pr-4 pb-4"
                      id="custom-scroll">

                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Выпечка</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Основные блюда</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Салаты и винегреты</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Домашние заготовки</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Супы и бульоны</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Запеканки</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Десерты</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Закуски</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Блины, оладьи, сырники</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Соусы и заправки</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Каши</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Бутерброды</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Пельмени и вареники</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Шашлык</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Хлеб</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Напитки</span>
                        </label>
                     </li>

                  </ul>
                  <!-- /list -->

               </div>
               <!-- /.category-filter -->
               <div x-data="{ timeOpen: false }" class="border-b mt-2">

                  <button
                     @click="
                        if(timeOpen === true) {
                           timeOpen = false;
                        }
                        else {
                           timeOpen = true;
                        }
                     "
                     class="outline-none focus:outline-none cursor-pointer
		                      hover:text-gray-500 uppercase flex items-center
		                      group pb-2">
                     Быстрые рецепты
                     <svg :class="{ 'arrow-rotate': timeOpen }"
                          x="0px"
                          y="0px"
                          viewBox="0 0 451.847 451.847"
                          class="w-2.5 h-2.5 ml-2 fill-current
		                           group-hover:text-gray-500">
                        <g>
                           <path d="M225.923,354.706c-8.098,
                              0-16.195-3.092-22.369-9.263L9.27,
                              151.157c-12.359-12.359-12.359-32.397,0-44.751
                                 c12.354-12.354,32.388-12.354,44.748,0l171.905,
                                 171.915l171.906-171.909c12.359-12.354,
                                 32.391-12.354,44.744,0
                                 c12.365,12.354,12.365,32.392,0,44.751L248.292,
                                 345.449C242.115,351.621,234.018,
                                 354.706,225.923,354.706z"/>
                        </g>
                        <g></g><g></g><g></g><g></g>
                        <g></g><g></g><g></g><g></g>
                        <g></g><g></g><g></g><g></g>
                        <g></g><g></g><g></g>
                     </svg>
                  </button>

                  <ul x-show="timeOpen"
                      class="pr-4 pb-4"
                      id="custom-scroll">

                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">до 15 минут</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">до 30 минут</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">до 45 минут</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">до 60 минут</span>
                        </label>
                     </li>

                  </ul>
                  <!-- /list -->

               </div>
               <!-- /.time-filter -->
               <div x-data="{ eatingOpen: false }" class="border-b mt-2">

                  <button
                     @click="
                        if(eatingOpen === true) {
                           eatingOpen = false;
                        }
                        else {
                           eatingOpen = true;
                        }
                     "
                     class="outline-none focus:outline-none cursor-pointer
                            hover:text-gray-500 uppercase flex items-center
                            group pb-2">
                     Время приема пищи
                     <svg :class="{ 'arrow-rotate': eatingOpen }"
                          x="0px"
                          y="0px"
                          viewBox="0 0 451.847 451.847"
                          class="w-2.5 h-2.5 ml-2 fill-current
		                           group-hover:text-gray-500">
                        <g>
                           <path d="M225.923,354.706c-8.098,
                              0-16.195-3.092-22.369-9.263L9.27,
                              151.157c-12.359-12.359-12.359-32.397,0-44.751
                                 c12.354-12.354,32.388-12.354,44.748,0l171.905,
                                 171.915l171.906-171.909c12.359-12.354,
                                 32.391-12.354,44.744,0
                                 c12.365,12.354,12.365,32.392,0,44.751L248.292,
                                 345.449C242.115,351.621,234.018,
                                 354.706,225.923,354.706z"/>
                        </g>
                        <g></g><g></g><g></g><g></g>
                        <g></g><g></g><g></g><g></g>
                        <g></g><g></g><g></g><g></g>
                        <g></g><g></g><g></g>
                     </svg>
                  </button>

                  <ul x-show="eatingOpen"
                      class="pr-4 pb-4"
                      id="custom-scroll">

                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Завтрак</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Обед</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Ужин</span>
                        </label>
                     </li>

                  </ul>
                  <!-- /list -->

               </div>
               <!-- /.eating-filter -->
               <div x-data="{ holidaysOpen: false }" class="border-b mt-2">

                  <button
                     @click="
                        if(holidaysOpen === true) {
                           holidaysOpen = false;
                        }
                        else {
                           holidaysOpen = true;
                        }
                     "
                     class="outline-none focus:outline-none cursor-pointer
                            hover:text-gray-500 uppercase flex items-center
                            group pb-2">
                     По праздникам
                     <svg :class="{ 'arrow-rotate': holidaysOpen }"
                          x="0px"
                          y="0px"
                          viewBox="0 0 451.847 451.847"
                          class="w-2.5 h-2.5 ml-2 fill-current
		                           group-hover:text-gray-500">
                        <g>
                           <path d="M225.923,354.706c-8.098,
                              0-16.195-3.092-22.369-9.263L9.27,
                              151.157c-12.359-12.359-12.359-32.397,0-44.751
                                 c12.354-12.354,32.388-12.354,44.748,0l171.905,
                                 171.915l171.906-171.909c12.359-12.354,
                                 32.391-12.354,44.744,0
                                 c12.365,12.354,12.365,32.392,0,44.751L248.292,
                                 345.449C242.115,351.621,234.018,
                                 354.706,225.923,354.706z"/>
                        </g>
                        <g></g><g></g><g></g><g></g>
                        <g></g><g></g><g></g><g></g>
                        <g></g><g></g><g></g><g></g>
                        <g></g><g></g><g></g>
                     </svg>
                  </button>

                  <ul x-show="holidaysOpen"
                      class="pr-4 pb-4"
                      id="custom-scroll">

                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Масленица</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Новый год</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Пасха</span>
                        </label>
                     </li>
                     <li class="flex mt-2">
                        <label class="flex items-center">
                           <input type="checkbox"
                                  class="form-checkbox w-5 h-5 border
				                             border-black text-purple-600">
                           <span class="ml-2">Пост</span>
                        </label>
                     </li>

                  </ul>
                  <!-- /list -->

               </div>
               <!-- /.holidays-filter -->

            </div>
            <!-- /.filters-list -->

            <div class="grid flex w-full xl:grid-cols-4 lg:grid-cols-2
                        grid-cols-1 gap-4 md:pl-4">

               {{--               <x-recipe-card :recipe="123"/>--}}

            </div>
            <!-- /.recipes-grid -->

         </div>

      </div>
      <!-- /.recipes-tab -->

      <div x-show="tab === 'article'"
           class="px-8 md:px-16">

         <div class="my-4">
            Показано
            <strong>1550</strong>
            записей по запросу
            <strong>паста</strong>
         </div>
         <!-- /.count -->
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            <x-article-card :article="123"/>
            <x-article-card :article="123"/>
            <x-article-card :article="123"/>
            <x-article-card :article="123"/>
            <x-article-card :article="123"/>
            <x-article-card :article="123"/>

         </div>
         <!-- /.all-search-recipes -->

      </div>
      <!-- /.all-tab -->

   </div>

@endsection
