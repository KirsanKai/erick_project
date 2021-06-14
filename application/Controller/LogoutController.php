<?php


namespace App\Controller;


use App\Model\LogoutModel;
use App\Response\LogoutResponse;

class LogoutController
{

    private LogoutModel $model;

    public function __construct()
    {
        $this->model = new LogoutModel();
    }

    public function action(): void
    {
        $this->model->action();
        echo json_encode(new LogoutResponse());
    }

}