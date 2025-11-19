<?php

namespace Core;

class ValidationException extends \Exception
{
    public readonly array $errors;
    public readonly array $old;
    public static function throw($error, $old){
        $instance = new static('The form failed to validate.');
        $instance->errors = $error;
        $instance->old = $old;
        return $instance;
    }
}
