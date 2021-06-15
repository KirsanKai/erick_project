<?php


namespace App\Response;


class IndexResponseDto
{
    public function __construct()
    {
        http_response_code(200);
    }
}