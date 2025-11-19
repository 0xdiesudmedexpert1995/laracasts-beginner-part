<?php

namespace Core;

use Exception;

class Container {
    protected $bindings = [];
    public function bind($key, $resolve) : void {
        $this->bindings[$key] = $resolve;
    }

    public function resolve($key){
        if(!array_key_exists($key, $this->bindings)){
            throw new Exception("No matching binding found for ".$key, 1);
        }
        $resolver = $this->bindings[$key];

        return call_user_func($resolver);

    }
}
