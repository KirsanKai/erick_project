<?php

namespace App\Service;

class EncoderPasswordService {

    public function encode(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function passwordCheck(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }

}