<?php namespace Favel\Validation;

class ValidationException extends \Exception {

    public function __construct($messages)
    {
        $this->messages = $messages;
    }

    public function messages()
    {
        return $this->messages;
    }

}