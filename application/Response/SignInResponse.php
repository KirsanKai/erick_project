<?php


namespace App\Response;


class SignInResponse
{

    public function __construct()
    {
        http_response_code(200);
    }

}