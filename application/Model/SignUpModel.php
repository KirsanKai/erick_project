<?php


namespace App\Model;


use App\Core\Model;
use App\Entity\User;
use App\Exception\SignUpException;
use App\Repository\MySql\UserRepository;
use App\Repository\UserRepositoryInterface;
use App\Request\SignUpRequestDto;
use App\Service\EncoderPasswordService;

class SignUpModel
{

    private UserRepositoryInterface $userRepository;
    private EncoderPasswordService $encoderPasswordService;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->encoderPasswordService = new EncoderPasswordService();
    }

    public function action(SignUpRequestDto $requestDto): void
    {
        if ($this->userRepository->getByLogin($requestDto->getLogin())) {
            throw new SignUpException('User such login already exist');
        }
        $user = new User();
        $hash = $this->encoderPasswordService->encode($requestDto->getPassword());
        $user->setLogin($requestDto->getLogin());
        $user->setPassword($hash);
        if (!$this->userRepository->insert($user)) {
            throw new SignUpException('Registration is not possible', 500);
        }
    }
}