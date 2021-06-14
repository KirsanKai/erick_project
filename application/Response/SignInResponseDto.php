<?php


namespace App\Response;


class SignInResponseDto
{

    public function __construct()
    {
        http_response_code(200);
    }

}