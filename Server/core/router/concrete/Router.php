<?php
class Router implements IRouter {
    public array $routes = array();
    public function AddRoute($method,$path ,$handler ,$middlewares = array()):void
    {        
        $this->routes[] = array(
            'method' => $method,
            'path' => $path,
            'handler' => $handler,
            'middlewares' => $middlewares
        );
    }
    public function HandleRequest($method, $url):void
    {
        foreach($this->routes as $route)
        {
            if($route['method'] === $method && $route['path'] === $url)
            {
                // before main function call the middlewares
                foreach($route['middlewares'] as $middleware)
                    $middleware();
                if($route['handler'] != null)
                    call_user_func($route['handler']);
            }

        }

    }
}
