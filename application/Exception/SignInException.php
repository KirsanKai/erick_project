<?php


namespace App\Exception;


use Exception;
use Throwable;

class SignInException extends Exception
{

    public function __construct($message = "", $code = 400, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}