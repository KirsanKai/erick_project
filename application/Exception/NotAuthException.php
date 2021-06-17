<?php


namespace App\Exception;


use Exception;
use Throwable;

class NotAuthException extends Exception
{
    public function __construct($message = "", $code = 401, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}