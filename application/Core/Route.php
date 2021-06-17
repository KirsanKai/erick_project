<?php


namespace App\Core;


class Route
{
    private string $path;
    private string $controller;
    private ?string $request;

    public function __construct(string $path, string $controller, string $request = null)
    {
        $this->setPath($path);
        $this->setController($controller);
        $this->setRequest($request);
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getRequest(): ?string
    {
        return $this->request;
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * @param string $path
     */
    private function setPath(string $path): void
    {
        $this->path = $path;
    }

    /**
     * @param string $controller
     */
    private function setController(string $controller): void
    {
        $this->controller = "\App\Controller" . $controller;
    }

    /**
     * @param string|null $request
     */
    private function setRequest(?string $request): void
    {
        if ($request) {
            $this->request = "\App\Request" . $request;
        } else {
            $this->request = null;
        }
    }

}