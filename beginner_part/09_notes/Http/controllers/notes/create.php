<?php 
/* use Core\Database ;
use Core\TextValidator;

$config = require base_path('config.php');
$db = new Database($config['database']);
$errors = [];


if($_SERVER["REQUEST_METHOD"] === 'POST'){
    

    if(!TextValidator::stringLength($_POST['note_text'], 1, 100)){
        $errors['note_text'] = 'Body of no more than 1,000 characters is required.';
    }

    if(empty($errors)){
        $db->query('INSERT INTO notes(note_text, user_id) VALUES (:note_text, :user_id)', [
            'note_text' => $_POST['note_text'],
            'user_id' => 1
        ]);
    }
    
}

//dd($_SERVER); */

view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => []
]);
