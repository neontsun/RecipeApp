<div class="w-32 flex flex-col items-center group">
   <a href="{{ route('category.show', $category->path) }}">
      <div class="w-32 h-32 border rounded-full group-hover:shadow-xl">
         <img src="{{ $category->avatar }}"
              alt=""
              class="w-full h-full object-cover rounded-full">
      </div>
   </a>
   <div class="mt-2 truncate w-full">
      <a href="{{ route('category.show', $category->path) }}">
         {{ $category->name }}
      </a>
   </div>
</div>
