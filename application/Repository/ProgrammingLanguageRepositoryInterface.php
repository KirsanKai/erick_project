<?php


namespace App\Repository;


use App\Entity\ProgrammingLanguage;

interface ProgrammingLanguageRepositoryInterface
{
    public function getLanguageById(string $id): ?ProgrammingLanguage;
    public function getAll(): array;
}