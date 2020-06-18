<?php include_once '_header.php'; ?>


<?php foreach (range(1, 10) as $i): ?>
  <div class="px-4 py-2 border-b border-dashed border-blue-300">

<!--    Heading-->
    <h2 class="sm:text-xl md:text-2xl leading-tight mb-2 font-semibold">
      <a href="/article.php" class="text-gray-800 hover:text-gray-900 focus:outline-none focus:text-gray-900">
        Exploring the good things of Laravel through my journey with web frameworks!
      </a>
    </h2>

<!--    Published at and author-->
    <div class="md:flex justify-between items-center">

      <div class="text-gray-600 text-xs md:text-sm">
        Published 1 year ago on
        <a href="#" class="text-blue-400 hover:text-blue-700 focus:outline-none focus:text-blue-700">PHP</a>
        <span class="whitespace-no-wrap">by <span class="text-gray-800">Al Imran Ahmed</span></span>
      </div>



<!--      Tags-->
      <div>
        <a href="#"
           class="bg-indigo-200 rounded-lg pb-1 px-2 text-xs text-gray-800 font-semibold hover:text-white
           hover:bg-indigo-400
           focus:outline-none focus:text-white focus:bg-indigo-400">
          php</a>

        <a href="#"
           class="bg-indigo-200 rounded-lg pb-1 px-2 text-xs text-gray-800 hover:text-white hover:bg-indigo-400 focus:outline-none focus:text-white focus:bg-indigo-400">
          oop</a>

      </div>

    </div>
  </div>

<?php endforeach ?>

<?php include_once '_footer.php'; ?>
