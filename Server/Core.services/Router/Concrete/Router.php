<?php
namespace Base\Service\Router\Concrete;
include_once '../Abstract/IRouter.php';
include_once '../Abstract/IRoute.php';

use Base\Service\Router\Virtual\IRouter;

class Router implements IRouter {
    protected $routes = array();
    public function AddRoute($method,$path ,$handler ,$middleware = array())
    {
        $this->routes[] = array(
            'method' => $method,
            'path' => $path,
            'handler' => $handler,
            'middleware' => $middleware
        );
    }
    public function HandleRequest($method, $url)
    {
        foreach($this->routes as $route)
        {
            if($route['method'] == $method && $route['path'] == $url)
            {
                // before main function call the middlewares
                foreach($route['middleware'] as $middleware)
                {
                    $middleware();
                }
                // call handler
                call_user_func($route["handler"]);
            }
            else {
                http_response_code(405);
            }
        }
    }
}
