<?php


namespace App\Repository\MySql;


use App\Entity\ProgrammingLanguage;
use App\Repository\ProgrammingLanguageRepositoryInterface;
use PDO;

class ProgrammingLanguageRepository implements ProgrammingLanguageRepositoryInterface
{

    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getLanguageById(string $id): ?ProgrammingLanguage
    {
        $query = "SELECT * FROM programming_language WHERE programming_language.id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':id', $id);
        if ($stmt->execute()) {
            $languageData = $stmt->fetch();
            if ($languageData) {
                $language = new ProgrammingLanguage();
                $language->setId($languageData['id']);
                $language->setName($languageData['name']);
                $language->setTotalNumberLessen($languageData['total_number_lessen']);
            }
        };
        return null;
    }

    public function getAll(): array
    {
        $query = "SELECT * FROM programming_language";
        $stmt = $this->connection->prepare($query);
        if ($stmt->execute()) {
            $resultArray = [];
            while ($row = $stmt->fetch()) {
                $language = new ProgrammingLanguage();
                $language->setId($row['id']);
                $language->setName($row['name']);
                $language->setTotalNumberLessen($row['total_number_lessen']);
                $resultArray[] = $language;
            }
            return $resultArray;
        };
        return [];
    }
}