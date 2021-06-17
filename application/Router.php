<?php

namespace App;

use App\Core\Controller;
use App\Core\Route;
use App\Request\Request;
use Throwable;

class Router
{

    private array $routes;

    public function __construct()
    {
        $this->initialRoutes();
        $this->parse();
    }

    public function parse()
    {
        foreach ($this->routes as $route) {
            if (preg_match('#^' . $route->getPath() . '$#', $_SERVER['REQUEST_URI'])) {
                $className = $route->getController();
                if ($route->getRequest()) {
                    $request = $this->createRequest($route->getRequest());
                    return (new $className())->action($request);
                }
                return (new $className())->action();
            }
        }
    }

    static public function exceptionHandler(Throwable $exception): Throwable
    {
        http_response_code($exception->getCode());
        return $exception;
    }

    private function initialRoutes(): void
    {
        $this->routes = [
            new Route('/', '\IndexController'),
            new Route('/sign-in', '\SignInController', '\SignInRequest'),
            new Route('/sign-up', '\SignUpController', '\SignUpRequest'),
            new Route('/logout', '\LogoutController'),
            new Route('/profile', '\ProfileController'),
            new Route('/study/languages', '\Study\ProgrammingLanguagesController')
        ];
    }

    private function createRequest(string $requestName)
    {
        $request = new $requestName();
        $data = null;
        if (!!$_POST) {
            $data = $_POST;
        } else {
            $data = json_decode(file_get_contents('php://input'));
        }
        foreach ($data as $key => $value) {
            $setterName = 'set' . ucfirst($key);
            $request->$setterName($value);
        }
        return $request;
    }

}