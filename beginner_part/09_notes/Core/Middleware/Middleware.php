<?php
namespace Core\Middleware;
use Core\Middleware\Authenticated;
use Core\Middleware\Guest;

class Middleware {
    public $MAP = [
        'guest' => Guest::class,
        'auth' => Authenticated::class
    ];

    /*
        public static function resolve($key)
    {
        if (!$key) {
            return;
        }

        $middleware = static::MAP[$key] ?? false;

        if (!$middleware) {
            throw new \Exception("No matching middleware found for key '{$key}'.");
        }

        (new $middleware)->handle();
    }
}
    */

    public static function resolve(string $key){
        if(!array_key_exists($key, static::MAP)){
            throw new \Exception("No matching middleware found for ".$key);
            
        }
        (new static::$MAP[$key])->handle();
    }
}
