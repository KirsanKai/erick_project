<?php


namespace App\Model;


use App\Core\Model;
use App\Repository\MySql\UserRepository;
use App\Service\SessionService;

class IndexModel extends Model
{

    private SessionService $sessionService;
    private UserRepository $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->sessionService = new SessionService();
        $this->userRepository = new UserRepository($this->connection);
    }

    public function action()
    {

    }

}