<?php


namespace App\Controller\Study;


use App\Exception\NotAuthException;
use App\Model\Study\ProgrammingLanguagesModel;
use App\Response\Study\LanguagesResponse;

class ProgrammingLanguagesController
{

    private ProgrammingLanguagesModel $programmingLanguagesModel;

    public function __construct()
    {
        $this->programmingLanguagesModel = new ProgrammingLanguagesModel();
    }

    /**
     * @throws NotAuthException
     */
    public function action(): void
    {
        $result = $this->programmingLanguagesModel->action();
        echo json_encode(new LanguagesResponse($result));
    }
}