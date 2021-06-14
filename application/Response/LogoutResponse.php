<?php


namespace App\Response;


class LogoutResponse
{
    public function __construct()
    {
        http_response_code(200);
    }
}