<?php


namespace App\Model;


use App\Core\Model;
use App\Entity\User;
use App\Exception\SignUpException;
use App\Repository\ProgrammingLanguageRepositoryInterface;
use App\Repository\MySql\ProgrammingLanguageRepository;
use App\Repository\MySql\UserRepository;
use App\Repository\UserRepositoryInterface;
use App\Request\SignUpRequest;
use App\Service\EncoderPasswordService;

class SignUpModel extends Model
{

    private UserRepositoryInterface $userRepository;
    private ProgrammingLanguageRepositoryInterface $languageRepository;
    private EncoderPasswordService $encoderPasswordService;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository($this->connection);
        $this->languageRepository = new ProgrammingLanguageRepository($this->connection);
        $this->encoderPasswordService = new EncoderPasswordService();
    }

    public function action(SignUpRequest $requestDto): void
    {
        if ($this->userRepository->getByLogin($requestDto->getLogin())) {
            throw new SignUpException('User such login already exist');
        }
        $user = new User();
        $hash = $this->encoderPasswordService->encode($requestDto->getPassword());
        $user->setPassword($hash);
        $this->setInitialUserData($user, $requestDto);
        if (!$this->userRepository->insert($user)) {
            throw new SignUpException('Registration is not possible', 500);
        }
    }

    private function setInitialUserData(User $user, SignUpRequest $requestDto): void
    {
        $user->setLogin($requestDto->getLogin());
        $user->setFirstName($requestDto->getFirstName());
        $user->setSecondName($requestDto->getSecondName());
        $user->setPatronymic($requestDto->getPatronymic());
        $user->setEmail($requestDto->getEmail());
        $user->setGrade('Incipient');
        $user->setAge($requestDto->getAge());
        $user->setSex($requestDto->getSex());
    }
}