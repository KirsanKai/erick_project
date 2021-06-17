<?php


namespace App\Response;


class SignUpResponse
{

    public function __construct()
    {
        http_response_code(200);
    }

}