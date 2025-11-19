
<?php 
  include 'partials/bodyHeader.php';
  include 'partials/nav.php';
  include 'partials/pageHeader.php';
?>

  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      It works. Welcome to index page, <?= $_SESSION['user']['name'] ?? 'Guest' ?>
    </div>
  </main>
<?php
  include 'partials/bodyFooter.php';
?>