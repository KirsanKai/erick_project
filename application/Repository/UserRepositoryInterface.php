<?php


namespace App\Repository;


use App\Entity\User;

interface UserRepositoryInterface
{

    public function getById(int $id): ?User;
    public function getByLogin(string $login): ?User;
    public function getAll(): array;

    public function insert(User $user): bool;

}