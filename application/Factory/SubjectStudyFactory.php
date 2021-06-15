<?php


namespace App\Factory;


use App\Entity\SubjectStudy;

class SubjectStudyFactory
{
    public function createSubjectFromDb(array $options): SubjectStudy
    {
        $subjectStudy = new SubjectStudy();
        $subjectStudy->setId($options['id']);
        $subjectStudy->setUserId($options['user_id']);
        $subjectStudy->setLanguageId($options['language_id']);
        $subjectStudy->setCurrentNumberLessen($options['current_number_lessen']);
        return $subjectStudy;
    }
}