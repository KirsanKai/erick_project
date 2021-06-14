<?php


namespace App\Repository;


use App\Constant\DbConstant;
use PDO;

class DbConnection
{

    protected PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO(DbConstant::PDO, DbConstant::USERNAME, DbConstant::PASSWORD);
    }

}