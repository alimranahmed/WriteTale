<div class="mb-0 py-2 justify-between items-center hidden md:flex">
  <a href="/" class="flex items-center">
    <img src="build/img/profile.png" alt="logo" class="rounded-full h-10 w-10 object-cover object-center">
    <div class="ml-4 font-semibold">Al Imran Ahmed</div>
  </a>

  <div>
    <input class="rounded-full border border-blue-300 outline-none px-2 focus:shadow w-full">
  </div>
  <div>
    <a href="#" class="uppercase hover:underline">Articles</a>
    <a href="#" class="uppercase hover:underline ml-4">About</a>
  </div>
</div>

<div class="mb-0 py-2 md:hidden">
  <div class="flex justify-between items-center">
    
    <a href="/" class="flex items-center">
      <img src="build/img/profile.png" alt="logo" class="rounded-full h-10 w-10 object-cover object-center">
      <div class="ml-4 font-semibold">Al Imran Ahmed</div>
    </a>

    <a class="rounded-full px-2 text-red-900 bg-red-300 hidden sm-hide-menu"
       onclick="document.querySelector('.sm-navs').classList.add('hidden');
       document.querySelector('.sm-show-menu').classList.remove('hidden');
        document.querySelector('.sm-hide-menu').classList.add('hidden');">x
    </a>
    
    <a class="inset rounded-full px-2 text-blue-900 sm-show-menu"
       onclick="document.querySelector('.sm-navs').classList.remove('hidden');
       document.querySelector('.sm-show-menu').classList.add('hidden');
        document.querySelector('.sm-hide-menu').classList.remove('hidden');">...</a>
  </div>

  <div class="sm-navs hidden">
    <div class="mt-4">
      <a href="#" class="uppercase hover:underline">Articles</a>
    </div>
    <div class="my-4">
      <a href="#" class="uppercase hover:underline">About</a>
    </div>
  </div>
</div>

