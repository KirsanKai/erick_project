<?php


namespace App\Model;


use App\Repository\MySql\UserRepository;
use App\Service\SessionService;

class IndexModel
{

    private SessionService $sessionService;
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->sessionService = new SessionService();
        $this->userRepository = new UserRepository();
    }

    public function action()
    {

    }

}