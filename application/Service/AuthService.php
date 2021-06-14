<?php


namespace App\Service;


class AuthService
{

    private SessionService $sessionService;

    public function __construct()
    {
        $this->sessionService = new SessionService();
    }

    public function auth(string $id): void
    {
        $this->sessionService->set('is_auth', true);
        $this->sessionService->set('user_id', $id);
    }

    public function isAuth(): bool
    {
        if ($this->sessionService->get('is_auth')) {
            return true;
        }
        return false;
    }

    public function out(): void
    {
        $_SESSION = array();
        session_destroy();
    }

}