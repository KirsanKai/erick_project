<?php


namespace App\Response;


class ProfileResponse
{
    public string $login;
    public string $age;
    public string $firstName;
    public string $second_name;
    public string $patronymic;
    public string $grade;
    public string $email;
    public string $sex;

    public function __construct(
        string $login,
        string $age,
        string $firstName,
        string $second_name,
        string $patronymic,
        string $grade,
        string $email,
        string $sex
    )
    {
        http_response_code(200);
        $this->login = $login;
        $this->age = $age;
        $this->firstName = $firstName;
        $this->second_name = $second_name;
        $this->patronymic = $patronymic;
        $this->grade = $grade;
        $this->email = $email;
        $this->sex = $sex;
    }

}