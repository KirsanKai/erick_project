<?php


namespace App\Factory;


use App\Entity\User;

class UserFactory
{
    public function createFromDb(array $options): User
    {
        $user = new User();
        $user->setId($options['id']);
        $user->setPassword($options['password']);
        $user->setLogin($options['login']);
        $user->setAge($options['age']);
        $user->setFirstName($options['first_name']);
        $user->setSecondName($options['second_name']);
        $user->setPatronymic($options['patronymic']);
        $user->setGrade($options['grade']);
        $user->setEmail($options['email']);
        $user->setSex($options['sex']);
        return $user;
    }
}