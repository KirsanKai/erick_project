<?php


namespace App\Factory;


use App\Entity\User;

class UserFactory
{
    public function createUserFromDb(array $options): User
    {
        $user = new User();
        $user->setId($options['id']);
        $user->setPassword($options['password']);
        $user->setLogin($options['login']);
        return $user;
    }
}