<?php
/* 
use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Session;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {
    if((new Authenticator)->attempt($email, $password)){
        redirect('/');
    }

    $form->error('email', 'No matching account found for that email address and password');
}


Session::flash('errors', $form->errors());

Session::flash('old', [
    'email' => $_POST['email']
]);

return redirect('login'); 
*/

use Core\Authenticator;
use Http\Forms\LoginForm;

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$signedIn = (new Authenticator)->attempt($attributes['email'], $attributes['password']);

if(!$signedIn){
    $form->error( 'email', 'No matching account found for that email address and password.')->throw()();
}

redirect('/');
