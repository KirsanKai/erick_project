<?php


namespace App\Service;


class SessionService
{

    public function set(string $key, string $val): void
    {
        $_SESSION[$key] = $val;
    }

    public function get(string $key)
    {
        return $_SESSION[$key];
    }

}