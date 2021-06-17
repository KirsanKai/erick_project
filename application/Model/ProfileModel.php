<?php


namespace App\Model;


use App\Core\Model;
use App\Entity\User;
use App\Exception\NotAuthException;
use App\Repository\MySql\UserRepository;
use App\Service\AuthService;

class ProfileModel extends Model
{

    private AuthService $authService;
    private UserRepository $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->authService = new AuthService();
        $this->userRepository = new UserRepository($this->connection);
    }

    /**
     * @return User
     * @throws NotAuthException
     */
    public function action(): User
    {
        if (!$this->authService->isAuth()) {
            throw new NotAuthException('You are not in system');
        }
        return $this->userRepository->getById($this->authService->getAuthUserId());
    }

}