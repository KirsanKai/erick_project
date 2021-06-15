<?php


namespace App\Model;


use App\Entity\User;
use App\Exception\NotAuthException;
use App\Repository\MySql\UserRepository;
use App\Service\AuthService;
use App\Service\SessionService;

class ProfileModel
{

    private AuthService $authService;
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->authService = new AuthService();
        $this->userRepository = new UserRepository();
    }

    public function action(): User
    {
        if (!$this->authService->isAuth()) {
            throw new NotAuthException('You are not in system');
        }
        return $this->userRepository->getById($this->authService->getAuthUserId());
    }

}