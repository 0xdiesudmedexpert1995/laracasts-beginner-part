<?php 
  require base_path('views/partials/bodyHeader.php');
  require base_path('views/partials/nav.php');
  require base_path('views/partials/pageHeader.php');
?>
  <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        This is notes page
      </div>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php if(isset($notes)):?>
        <?php foreach($notes as $note): ?>
          <li><a href="/note?id=<?=$note['id']?>" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden"><?=$note['note_text']?></a></li>
        <?php endforeach;?>
        <?php else:?>
          <p>Notes is empty</p>
        <?php endif;?>
      </div>
    
  </ul>
  <p>
    <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
  </p>
  </main>

<?php
 require base_path('views/partials/bodyFooter.php');;
  ?>