<?php


namespace App\Request;


class SignUpRequest
{
    private $login;
    private $password;
    private $age;
    private $firstName;
    private $second_name;
    private $patronymic;
    private $email;
    private $sex;

    private array $validateRules = [
        'login' => 'string',
        'password' => 'string',
        'age' => 'string',
        'firstName' => 'string',
        'secondName' => 'string',
        'patronymic' => 'string',
        'email' => 'string',
        'sex' => 'string'
    ];

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $second_name
     */
    public function setSecondName($second_name): void
    {
        $this->second_name = $second_name;
    }

    /**
     * @param mixed $patronymic
     */
    public function setPatronymic($patronymic): void
    {
        $this->patronymic = $patronymic;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @param array|string[] $validateRules
     */
    public function setValidateRules(array $validateRules): void
    {
        $this->validateRules = $validateRules;
    }


    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getSecondName()
    {
        return $this->second_name;
    }

    /**
     * @return mixed
     */
    public function getPatronymic()
    {
        return $this->patronymic;
    }

    /**
     * @return array|string[]
     */
    public function getValidateRules(): array
    {
        return $this->validateRules;
    }
}