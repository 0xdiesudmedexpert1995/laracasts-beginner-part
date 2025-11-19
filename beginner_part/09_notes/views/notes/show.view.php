<?php 
  require base_path('views/partials/bodyHeader.php');
  require base_path('views/partials/nav.php');
  require base_path('views/partials/pageHeader.php');
?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <a href="/notes" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Go back</a>
      <?=htmlspecialchars($note['note_text']);?>
    </div>
  </main>

  <footer class="mt-6">
    <a href="/note/edit?id=<?=$note['id']?>" 
    class="inline-flex justify-center rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none fouce:ring-2 focus:ring-indigo-500 focus:ring-ofset-2"
    >Edit</a>
  </footer>


<?php
 
  require base_path('views/partials/bodyFooter.php');
  ?>