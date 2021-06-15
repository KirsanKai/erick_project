<?php


namespace App\Request;


class SignUpRequestDto
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

    public function __construct($login, $password, $age, $firstName, $second_name, $patronymic, $email, $sex)
    {
        $this->login = $login;
        $this->password = $password;
        $this->login = $login;
        $this->password = $password;
        $this->age = $age;
        $this->firstName = $firstName;
        $this->second_name = $second_name;
        $this->patronymic = $patronymic;
        $this->email = $email;
        $this->sex = $sex;
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