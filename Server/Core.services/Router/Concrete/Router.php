<?php

namespace Core\Router\Concrete\Router;
use Core\Router\Virtual\Router\IRouter;

class Router implements IRouter {
    public array $routes = array();
    public function AddRoute($method,$path ,$handler ,$middleware = array()):void
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
                continue;
            }
        }
        http_response_code(405);
    }
}
