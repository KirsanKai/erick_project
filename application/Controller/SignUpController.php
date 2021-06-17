<?php


namespace App\Controller;


use App\Core\Controller;
use App\Core\Model;
use App\Exception\RequestValidationException;
use App\Exception\SignUpException;
use App\Model\SignUpModel;
use App\Request\SignUpRequest;
use App\Response\SignUpResponse;
use App\Validator\Validator;

class SignUpController
{

    private SignUpModel $model;
    private Validator $validator;

    public function __construct()
    {
        $this->model = new SignUpModel();
        $this->validator = new Validator();
    }

    /**
     * @param SignUpRequest $request
     * @throws RequestValidationException
     * @throws SignUpException
     */
    public function action(SignUpRequest $request)
    {
        $this->validator->validate($request);
        $this->model->action($request);
        echo json_encode(new SignUpResponse());
    }
}