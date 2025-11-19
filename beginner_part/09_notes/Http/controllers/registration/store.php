<?php

use Core\App;
use Core\TextValidator;
use Core\Database;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!TextValidator::email($_POST['email'])) {
    $errors['email'] = 'Please provide a valid email address';
}

if (!empty($errors)) {
    return view("registration/create.view.php", [
        'errors' => $errors
    ]);

}

$user = $db->query('SELECT * FROM users where email =:email', [
    'email' => $email
])->find();

if ($user) {
    header('location: /');
    exit();
} else {
    $db->query('INSERT INTO users (email, password) VALUES(:email, :password)',[
        'note_text' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);

    
    login(['email'=>$email]);

    header('location: /');
    exit();
}


