<?php


namespace Core\Router\Concrete\Route;

use Core\Router\Concrete\Router\Router;
use Core\Router\Virtual\IRoute\IRoute;

class Route implements IRoute
{
    private string $method;
    private string $path;
    private string $handler;
    private array $middleware = array();
    
    public function __construct($method, $path, $handler)
    {
        $this->method = $method;
        $this->path = $path;
        $this->handler = $handler;
    }
    public function AddMiddleware($middleware):void
    {
        $this->middleware[] = $middleware;
    }
    public function RegisterToRouter(Router $router):void
    {
        $router->AddRoute($this->method, $this->path, $this->handler, $this->middleware);
        echo"registered successfully";
    }
}
