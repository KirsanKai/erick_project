<?php

use App\Router;

require_once __DIR__ . '/vendor/autoload.php';

session_start();

function exception_handler(Throwable $exception) {
    echo Router::exceptionHandler($exception);
}

set_exception_handler('exception_handler');

new Router();