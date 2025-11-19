<?php 
  require base_path('views/partials/bodyHeader.php');
  require base_path('views/partials/nav.php');
  require base_path('views/partials/pageHeader.php');
?>
<main>
    <form method = "POST" action="/notes">
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-white">Your note</h2>
                <p class="mt-1 text-sm/6 text-gray-400">Tell what you think or notice</p>

                <div class="col-span-full">
                    <label for="note_text" class="block text-sm/6 font-medium text-white">Note</label>
                    <div class="mt-2">
                        <textarea id="note_text" name="note_text" rows="3" cols="1" 
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" 
                            placeholder="Here's an idea for a note..." require>
                            <?= $_POST['note_text'] ?? '' ?>
                        </textarea>
                    </div>
                </div>
                <p class="mt-3 text-sm/6 text-gray-400">Write a few sentences about what you think or notice.</p>
            
                <!-- <?php if(isset($errors['note_text'])) : ?> -->
                        <p class="text-red-500 text-xs mt-2"><?= $errors['note_text']; ?></p>
                <!--     <?php endif; ?> -->
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" 
            class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
            >Creater</button>
        </div>
    </form> 
           
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <a href="/notes" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Go back</a>
    </div>
</main>



<?php 
  require base_path('views/partials/bodyFooter.php');
?>