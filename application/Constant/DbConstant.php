<?php


namespace App\Constant;


class DbConstant
{

    public const USERNAME = "root";
    public const PASSWORD = "root";
    public const HOST = "127.0.0.1";
    public const NAME = "erick_project";
    public const DB = 'mysql';

    public const PDO = self::DB . ':dbname=' . self::NAME . ';host' . self::HOST;
}