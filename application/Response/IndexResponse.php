<?php


namespace App\Response;


class IndexResponse
{
    public function __construct()
    {
        http_response_code(200);
    }
}