<?php


namespace App\Model;


use App\Service\AuthService;

class LogoutModel
{

    private AuthService $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function action(): void
    {
        $this->authService->out();
    }

}