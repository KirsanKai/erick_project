<?php


namespace App\Model;


use App\Exception\SignInException;
use App\Repository\MySql\UserRepository;
use App\Repository\UserRepositoryInterface;
use App\Request\SignInRequestDto;
use App\Service\AuthService;
use App\Service\EncoderPasswordService;

class SignInModel
{

    private UserRepositoryInterface $userRepository;
    private AuthService $authService;
    private EncoderPasswordService $passwordEncoderService;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->authService = new AuthService();
        $this->passwordEncoderService = new EncoderPasswordService();
    }

    /**
     * @param SignInRequestDto $requestDto
     * @throws SignInException
     */
    public function action(SignInRequestDto $requestDto): void
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