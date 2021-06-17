<?php


namespace App\Response\Study;


class LanguagesResponse
{

    public array $languages;

    public function __construct($languages)
    {
        $this->languages = $languages;
        http_response_code(200);
    }
}