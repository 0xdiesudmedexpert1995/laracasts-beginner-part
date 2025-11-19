<?php

/*return [
    '/' => '/index.php',
    '/about' => '/about.php',
    '/notes' => '/notes/index.php',
    '/note' => '/notes/show.php',
    '/notes/create' => '/notes/create.php',
    '/contact' => '/contact.php',
];*/

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');


$router->get('/notes', '/otes/index.php')->only('auth');
$router->get('/note', 'notes/show.php');
$router->delete('/note', 'notes/destroy.php');

$router->get('/notes/create', 'notes/create.php');
$router->post('/notes', 'notesstore.php');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->post('/session', 'session/destroy.php')->only('auth');

$router->get('/note/edit', 'notes/edit.php');
$router->patch('/notes', 'notes/update.php');

