<?php


namespace App\Repository;


use App\Entity\SubjectStudy;

interface SubjectStudyRepositoryInterface
{
    public function getById(string $id): ?SubjectStudy;
    public function getUserId(string $userId): ?SubjectStudy;
    public function insert(SubjectStudy $subjectStudy): bool;
    public function update(SubjectStudy $subjectStudy): bool;
}