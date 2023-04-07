<?php
namespace Base\Service\Router\Concrete;
use Base\Service\Router\Virtual\IRoute;
use Base\Service\Router\Virtual\IRouter;
include '../Abstract/IRouter.php';
include '../Abstract/IRoute.php';

class Route implements IRoute
{
    private $method;
    private $path;
    private $handler;
    private $middleware = array();
    
    public function __construct($method, $path, $handler)
    {
        $this->method = $method;
        $this->path = $path;
        $this->handler = $handler;
    }
    public function AddMiddleware($middleware)
    {
        $this->middleware[] = $middleware;
    }
    public function RegisterToRouter(IRouter $router)
    {
        $router->AddRoute($this->method, $this->path, $this->handler, $this->middleware);
    }
}