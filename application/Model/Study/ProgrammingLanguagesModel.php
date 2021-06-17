<?php


namespace App\Model\Study;


use App\Core\Model;
use App\Exception\NotAuthException;
use App\Repository\MySql\ProgrammingLanguageRepository;
use App\Repository\ProgrammingLanguageRepositoryInterface;
use App\Service\AuthService;

class ProgrammingLanguagesModel extends Model
{

    private ProgrammingLanguageRepositoryInterface $programmingLanguageRepository;
    private AuthService $authService;

    public function __construct()
    {
        parent::__construct();
        $this->programmingLanguageRepository = new ProgrammingLanguageRepository($this->connection);
        $this->authService = new AuthService();
    }

    /**
     * @return array
     * @throws NotAuthException
     */
    public function action(): array
    {
        if (!$this->authService->isAuth()) {
            throw new NotAuthException('You are not in system');
        }
        return $this->programmingLanguageRepository->getAll();
    }

}