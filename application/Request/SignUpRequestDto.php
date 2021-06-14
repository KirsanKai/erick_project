<?php


namespace App\Request;


class SignUpRequestDto extends RequestDto
{
    private $login;
    private $password;

    private array $validateRules = [
        'login' => 'string',
        'password' => 'string'
    ];

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
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