<?php

require_once __DIR__ . '/vendor/autoload.php';

session_start();

function exception_handler(Throwable $exception) {
    echo "Неперехваченное исключение: " , $exception->getMessage(), "\n";
}

set_exception_handler('exception_handler');

new \App\Router();