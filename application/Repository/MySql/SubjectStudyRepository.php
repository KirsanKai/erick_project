<?php


namespace App\Repository\MySql;


use App\Entity\SubjectStudy;
use App\Factory\SubjectStudyFactory;
use App\Repository\SubjectStudyRepositoryInterface;
use PDO;

class SubjectStudyRepository implements SubjectStudyRepositoryInterface
{

    private SubjectStudyFactory $subjectStudyFactory;
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
        $this->subjectStudyFactory = new SubjectStudyFactory();
    }

    public function getById(string $id): ?SubjectStudy
    {
        $query = "SELECT * FROM subject_study WHERE subject_study.id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':id', $id);
        if ($stmt->execute()) {
            $subjectStudyData = $stmt->fetch();
            if ($subjectStudyData) {
                return $this->userFactory->createFromDb($subjectStudyData);;
            }
        };
        return null;
    }

    public function getUserId(string $userId): ?SubjectStudy
    {
        $query = "SELECT * FROM subject_study WHERE subject_study.user_id = :user_id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':user_id', $userId);
        if ($stmt->execute()) {
            $subjectStudyData = $stmt->fetch();
            if ($subjectStudyData) {
                return $this->userFactory->createFromDb($subjectStudyData);;
            }
        };
        return null;
    }

    public function insert(SubjectStudy $subjectStudy): bool
    {
        $query = "INSERT INTO subject_study (user_id, language_id, current_number_lessen) VALUES (:userId, :languageId, :currentNumberLessen)";
        $stmt = $this->connection->prepare($query);
        $userId = $subjectStudy->getUserId();
        $currentNumberLessen = $subjectStudy->getCurrentNumberLessen();
        $languageId = $subjectStudy->getLanguageId();
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':languageId', $languageId);
        $stmt->bindParam(':currentNumberLessen', $currentNumberLessen);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update(SubjectStudy $subjectStudy): bool
    {
        // TODO: Implement update() method.
    }
}