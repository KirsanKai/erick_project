<?php


namespace App\Entity;


class SubjectStudy
{

    private string $id;
    private string $userId;
    private string $languageId;
    private string $currentNumberLessen;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    /**
     * @param string $languageId
     */
    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    /**
     * @return string
     */
    public function getCurrentNumberLessen(): string
    {
        return $this->currentNumberLessen;
    }

    /**
     * @param string $currentNumberLessen
     */
    public function setCurrentNumberLessen(string $currentNumberLessen): void
    {
        $this->currentNumberLessen = $currentNumberLessen;
    }



}