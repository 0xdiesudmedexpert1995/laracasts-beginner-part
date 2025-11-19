<?php

use Core\App;
use Core\Database;
use Core\TextValidator;
$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id',[
     'id' => $_POST['id']
 ])->findOrFail();
authorize($note['user_id'] === $currentUserId);

$errors = [];

if(!TextValidator::stringLength($_POST['note_text'], 1, 100)){
    $errors['note_text'] = 'Body of no more than 1,000 characters is required.';
}

if(count($errors)){
    view("notes/edit.view.php", [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('UPDATES notes SET note_text = :note_text where id = :id', [
    'note_text' => $_POST['note_text'],
    'user_id' => 1
]);

header('location: /notes');
die();