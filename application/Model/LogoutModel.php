<?php


namespace App\Model;


use App\Core\Model;
use App\Service\AuthService;

class LogoutModel extends Model
{

    private AuthService $authService;

    public function __construct()
    {
        parent::__construct();
        $this->authService = new AuthService();
    }

    public function action(): void
    {
        $this->authService->out();
    }

}