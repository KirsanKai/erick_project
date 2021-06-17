<?php


namespace App\Request;


class SignInRequest extends Request
{
    private $login;
    private $password;

    private array $validateRules = [
        'login' => 'string',
        'password' => 'string'
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
     * @param array|string[] $validateRules
     */
    public function setValidateRules(array $validateRules): void
    {
        $this->validateRules = $validateRules;
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
     * @return array|string[]
     */
    public function getValidateRules(): array
    {
        return $this->validateRules;
    }


}