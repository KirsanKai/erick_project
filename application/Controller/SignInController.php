<?php


namespace App\Controller;


use App\Exception\RequestValidationException;
use App\Exception\SignInException;
use App\Model\SignInModel;
use App\Request\Request;
use App\Request\SignInRequest;
use App\Response\SignInResponse;
use App\Validator\Validator;

class SignInController
{

    private SignInModel $model;
    private Validator $validator;

    public function __construct()
    {
        $this->model = new SignInModel();
        $this->validator = new Validator();
    }

    /**
     * @param SignInRequest $request
     * @throws RequestValidationException
     * @throws SignInException
     */
    public function action(SignInRequest $request)
    {
        $this->validator->validate($request);
        $result = $this->model->action($request);
        echo json_encode(new SignInResponse($result));
    }
}