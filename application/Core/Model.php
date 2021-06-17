<?php


namespace App\Core;


use App\Constant\DbConstant;
use App\Repository\DbConnection;
use PDO;

abstract class Model
{

    protected PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO(DbConstant::PDO, DbConstant::USERNAME, DbConstant::PASSWORD);
    }

}