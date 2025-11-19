<?php
namespace Core;

class TextValidator {
    public static function stringLength(string $value, int $min=1, int $max=PHP_INT_MAX){
        $value = trim($value);
        $length = strlen($value);
        return $length >= $min && $length <= $max;   
    }

    // we will use itw asap    
    public static function email(string $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}