<?php


namespace App\Model;


use App\Core\Model;
use App\Exception\SignInException;
use App\Repository\MySql\UserRepository;
use App\Repository\UserRepositoryInterface;
use App\Request\SignInRequest;
use App\Service\AuthService;
use App\Service\EncoderPasswordService;

class SignInModel extends Model
{

    private UserRepositoryInterface $userRepository;
    private AuthService $authService;
    private EncoderPasswordService $passwordEncoderService;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository($this->connection);
        $this->authService = new AuthService();
        $this->passwordEncoderService = new EncoderPasswordService();
    }

    /**
     * @param SignInRequest $requestDto
     * @throws SignInException
     */
    public function action(SignInRequest $requestDto): void
    {
        $user = $this->userRepository->getByLogin($requestDto->getLogin());
        if (!$user) {
            throw new SignInException('Such user not exist');
        }
        if (!$this->passwordEncoderService->passwordCheck($requestDto->getPassword(), $user->getPassword())) {
            throw new SignInException('Password not correct');
        }
        $this->authService->auth($user->getId());
    }

}