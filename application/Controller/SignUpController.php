<?php


namespace App\Controller;


use App\Core\Controller;
use App\Core\Model;
use App\Exception\RequestValidationException;
use App\Exception\SignUpException;
use App\Model\SignUpModel;
use App\Request\SignUpRequestDto;
use App\Response\SignUpResponseDto;
use App\Validator\Validator;

class SignUpController extends Controller
{

    private SignUpModel $model;
    private Validator $validator;

    public function __construct()
    {
        $this->model = new SignUpModel();
        $this->validator = new Validator();
    }

    /**
     * @throws RequestValidationException
     * @throws SignUpException
     */
    public function action()
    {
        $request = new SignUpRequestDto($_POST['login'], $_POST['password']);
        $this->validator->validate($request);
        $this->model->action($request);
        echo json_encode(new SignUpResponseDto());
    }
}