<?php

use Core\App;
use Core\TextValidator;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

if (!TextValidator::stringLength($_POST['note_text'], 1, 1000)) {
    $errors['note_text'] = 'A body of no more than 1000 characters is required';
}

if (!empty($errors)) {
    return view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => []
    ]);

}


$db->query('INSERT INTO notes (note_text, user_id) VALUES(:note_text, :user_id)',[
    'note_text' => $_POST['note_text'],
    'user_id' => 1
]);

header('location: /notes');

die();