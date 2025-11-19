<?php
use Core\Response;

function dd($arg){
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
    die();
}

function is_current_page($url):bool{
    // var_dump($_SERVER['REQUEST_URI']);
    return $_SERVER['REQUEST_URI'] === $url;
}

function abort($code = 404){
    http_response_code($code);
    require base_path("views/".$code.".php");
    die();
}

function base_path($path){
    //dd(BASE_PATH.$path);
    return BASE_PATH.$path;
}


function authorize($condition, $status_code = Response::FORBIDDEN){
    
    if(!$condition){
        abort($status_code);
    }
    return true;
}

function view($path, $attributes = []){
    extract($attributes);
    require base_path('views/'.$path);
}


function redirect($path){
    header('location: '.$path);
    exit();
}


function old($key, $default = null){
    return Core\Session::get('old')[$key] ?? $default;
}