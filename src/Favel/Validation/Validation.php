<?php namespace Favel\Validation;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

trait Validation {

    public function check($input = array())
    {
        if (empty($input)) $input = Input::all();

        $validate = Validator::make($input, $this->rules, $this->messages);

        if ($validate->fails()) throw new ValidationException($validate->messages());
    }

}