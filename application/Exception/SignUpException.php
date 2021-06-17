<?php


namespace App\Exception;


use Throwable;

class SignUpException extends \Exception
{

    public function __construct($message = "", $code = 400, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}