<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no,
                  initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <title>@yield('title')</title>

   <link rel="stylesheet" href="/css/style.css">
   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</head>
<body id="custom-scroll">

   <nav class="border-b border-black">
      <div class="container md:container mx-auto py-4 flex lg:flex-row flex-col
                  justify-between items-center px-8 md:px-16">
         <a href="{{ route('main.index') }}"
            class="text-4xl font-bold">
            RECIPE
         </a>
         <div class="flex">
            <input type="text"
                   placeholder="Найти рецепт"
                   class="px-4 py-1.5 border w-56 sm:w-96 lg:my-0 my-4
                   outline-none border-black rounded-l focus:ring-4
                   focus:outline-none focus:ring-gray-300
                   focus:ring-opacity-75"
                   x-ref="search"
            >
            <button class="bg-purple-600 lg:my-0 my-4 px-8 py-1.5
                        outline-none rounded-r hover:bg-purple-700 transition
                        ease-in duration-150 focus:ring-4 focus:outline-none
                        focus:ring-purple-600 focus:ring-opacity-50
                        hover:cursor-pointer">
               <svg
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-5 text-white"
               >
                  <path
                     fill-rule="evenodd"
                     clip-rule="evenodd"
                     d="M18.319 14.4326C20.7628 11.2941 20.542 6.75347 17.6569
                     3.86829C14.5327 0.744098 9.46734 0.744098 6.34315
                     3.86829C3.21895 6.99249 3.21895 12.0578 6.34315
                     15.182C9.22833 18.0672 13.769 18.2879 16.9075
                     15.8442C16.921 15.8595 16.9351 15.8745 16.9497
                     15.8891L21.1924 20.1317C21.5829 20.5223 22.2161 20.5223
                     22.6066 20.1317C22.9971 19.7412 22.9971 19.1081 22.6066
                     18.7175L18.364 14.4749C18.3493 14.4603 18.3343 14.4462
                     18.319 14.4326ZM16.2426 5.28251C18.5858 7.62565 18.5858
                     11.4246 16.2426 13.7678C13.8995 16.1109 10.1005 16.1109
                      7.75736 13.7678C5.41421 11.4246 5.41421 7.62565 7.75736
                       5.28251C10.1005 2.93936 13.8995 2.93936 16.2426 5.28251Z"
                     fill="currentColor"
                  />
               </svg>
            </button>
         </div>
         <div class="flex items-center">
            <a href="#" class="mr-2">
               <button class="border border-black px-5 py-1.5 outline-none
                           rounded hover:bg-gray-100 transition ease-in
                           duration-150 focus:outline-none focus:ring-4
                           focus:ring-gray-300 focus:ring-opacity-50
                           hover:cursor-pointer">
                  Вход
               </button>
            </a>
            <a href="#">
               <button class="bg-green-500 px-5 py-1.5 outline-none
                           rounded text-white hover:bg-green-600 transition
                           ease-in duration-150 focus:outline-none
                           focus:ring-4 focus:ring-green-500
                           focus:ring-opacity-50 hover:cursor-pointer">
                  Регистрация
               </button>
            </a>
         </div>
      </div>
   </nav>

   @yield('content')

</body>
</html>
