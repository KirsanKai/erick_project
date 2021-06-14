<?php


namespace App\Controller;


use App\Core\Controller;
use App\Exception\RequestValidationException;
use App\Exception\SignInException;
use App\Model\SignInModel;
use App\Request\SignInRequestDto;
use App\Response\SignInResponseDto;
use App\Validator\Validator;

class SignInController extends Controller
{

    private SignInModel $model;
    private Validator $validator;

    public function __construct()
    {
        $this->model = new SignInModel();
        $this->validator = new Validator();
    }

    /**
     * @throws RequestValidationException
     * @throws SignInException
     */
    public function action()
    {
        $request = new SignInRequestDto($_POST['login'], $_POST['password']);
        $this->validator->validate($request);
        $result = $this->model->action($request);
        echo json_encode(new SignInResponseDto($result));
    }
}