<?php

namespace App;

use App\Core\Controller;
use App\Core\Route;

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
                return (new $className())->action();
            }
        }
    }

    private function initialRoutes(): void
    {
        $this->routes = [
            new Route('/', 'App\Controller\IndexController'),
            new Route('/sign-in', 'App\Controller\SignInController'),
            new Route('/sign-up', 'App\Controller\SignUpController'),
            new Route('/logout', 'App\Controller\LogoutController'),
            new Route('/profile', 'App\Controller\ProfileController'),
            new Route('/study/languages', 'App\Controller\Study\LanguagesController')
        ];
    }

}