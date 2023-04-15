<?php


namespace Core\Router\Virtual\IRoute;
use Core\Router\Concrete\Router\Router;

interface IRoute {
    public function AddMiddleware($middleware);
    public function RegisterToRouter(Router $router);
}