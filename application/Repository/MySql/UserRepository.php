<?php


namespace App\Repository\MySql;


use App\Entity\User;
use App\Factory\UserFactory;
use App\Repository\DbConnection;
use App\Repository\UserRepositoryInterface;

class UserRepository extends DbConnection implements UserRepositoryInterface
{

    private UserFactory $userFactory;

    public function __construct()
    {
        parent::__construct();
        $this->userFactory = new UserFactory();
    }

    public function getById(int $id): ?User
    {
        $query = "SELECT * FROM user WHERE user.id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':id', $id);
        if ($stmt->execute()) {
            $userData = $stmt->fetch();
            if ($userData) {
                return $this->userFactory->createUserFromDb($userData);;
            }
        };
        return null;
    }

    public function getByLogin(string $login): ?User
    {
        $query = "SELECT * FROM user WHERE user.login = :login";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':login', $login);
        if ($stmt->execute()) {
            $userData = $stmt->fetch();
            if ($userData) {
                return $this->userFactory->createUserFromDb($userData);;
            }
        };
        return null;
    }

    public function getAll(): array
    {
        // TODO: Implement getAll() method.
    }

    public function insert(User $user): bool
    {
        $query = "INSERT INTO user (login, password) VALUES (:login, :password)";
        $stmt = $this->connection->prepare($query);
        $login = $user->getLogin();
        $password = $user->getPassword();
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':password', $password);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}