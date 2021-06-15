<?php


namespace App\Controller;


use App\Model\ProfileModel;
use App\Response\ProfileResponseDto;

class ProfileController
{

    private ProfileModel $profileModel;

    public function __construct()
    {
        $this->profileModel = new ProfileModel();
    }

    public function action(): void
    {
        $result = $this->profileModel->action();
        $response = new ProfileResponseDto(
            $result->getLogin(),
            $result->getAge(),
            $result->getFirstName(),
            $result->getSecondName(),
            $result->getPatronymic(),
            $result->getGrade(),
            $result->getEmail(),
            $result->getSex()
        );
        echo json_encode($response);
    }

}