<?php


namespace App\Entity;


use JsonSerializable;

class ProgrammingLanguage implements JsonSerializable
{

    private string $id;
    private string $name;
    private string $totalNumberLessen;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getTotalNumberLessen(): string
    {
        return $this->totalNumberLessen;
    }

    /**
     * @param string $totalNumberLessen
     */
    public function setTotalNumberLessen(string $totalNumberLessen): void
    {
        $this->totalNumberLessen = $totalNumberLessen;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'totalNumberLessen' => $this->totalNumberLessen
        ];
    }
}