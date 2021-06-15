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
                return $this->userFactory->createFromDb($userData);;
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
                return $this->userFactory->createFromDb($userData);;
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
        $query = "INSERT INTO user (login, password, first_name, second_name, patronymic, age, email, grade, sex) VALUES (:login, :password, :firstName, :secondName, :patronymic, :age, :email, :grade, :sex)";
        $stmt = $this->connection->prepare($query);
        $login = $user->getLogin();
        $password = $user->getPassword();
        $firstName = $user->getFirstName();
        $secondName = $user->getSecondName();
        $patronymic = $user->getPatronymic();
        $age = $user->getAge();
        $email = $user->getEmail();
        $grade = $user->getGrade();
        $sex = $user->getSex();
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':secondName', $secondName);
        $stmt->bindParam(':patronymic', $patronymic);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':grade', $grade);
        $stmt->bindParam(':sex', $sex);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}