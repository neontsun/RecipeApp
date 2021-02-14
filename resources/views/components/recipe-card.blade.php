<div class="recipe-card px-2.5 py-2.5 rounded bg-gray-50 shadow
            hover:shadow-lg transition ease-in duration-150">
   <a href="{{ route('recipe.show', $recipe->path) }}">
      <img src="/img/easy-pizza-casserole-recipe-4-500x500.jpg"
           alt="recipe image"
           class="w-full h-64 object-cover rounded">
      <!-- /.img -->
      <div class="mt-2 font-bold text-xl">
         {{ $recipe->title }}
      </div>
      <!-- /.title-block -->
      <div class="mt-2 font-semibold text-sm">
         {{ $recipe->description }}
      </div>
      <!-- /.description-block -->
      <div class="mt-2 flex">
         <div class="mr-2 flex">
            <svg
               viewBox="0 0 24 24"
               fill="none"
               xmlns="http://www.w3.org/2000/svg"
               class="w-6 h-6 text-black"
            >
               <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M12.0122 5.57169L10.9252 4.48469C8.77734 2.33681
                  5.29493 2.33681 3.14705 4.48469C0.999162 6.63258 0.999162
                  10.115 3.14705 12.2629L11.9859 21.1017L11.9877 21.0999L12.014
                  21.1262L20.8528 12.2874C23.0007 10.1395 23.0007 6.65711
                  20.8528 4.50923C18.705 2.36134 15.2226 2.36134 13.0747
                  4.50923L12.0122 5.57169ZM11.9877 18.2715L16.9239
                  13.3352L18.3747 11.9342L18.3762 11.9356L19.4386
                  10.8732C20.8055 9.50635 20.8055 7.29028 19.4386
                  5.92344C18.0718 4.55661 15.8557 4.55661 14.4889
                  5.92344L12.0133 8.39904L12.006 8.3918L12.005
                  8.39287L9.51101 5.89891C8.14417 4.53207 5.92809
                  4.53207 4.56126 5.89891C3.19442 7.26574 3.19442
                  9.48182 4.56126 10.8487L7.10068 13.3881L7.10248
                  13.3863L11.9877 18.2715Z"
                  fill="currentColor"
               />
            </svg>
            <div class="ml-1">
               {{ $recipe->like_count }}
            </div>
         </div>
         <div class="mr-2 flex">
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="2"
                 stroke-linecap="round"
                 stroke-linejoin="round"
                 class="w-6 h-6 text-black">
               <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0
                        1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38
                        8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0
                        0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
            </svg>
            <div class="ml-1">
               {{ $recipe->comment_count }}
            </div>
         </div>
      </div>
      <!-- /.feedback-block -->
      <div class="mt-2">
         <a href="#" class="underline">
            by Tony Montana
         </a>
         <span class="mx-2">|</span>
         <span>
         {{ $recipe->created_at }}
      </span>
      </div>
      <!-- /.date-author-block -->
   </a>
</div>
<!-- /.recipe-card -->
