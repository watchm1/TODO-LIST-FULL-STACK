<?php

namespace Core\Router\Virtual;
use Core\Router\Concrete\Router;

interface IRoute {
    public function AddMiddleware($middleware);
    public function RegisterToRouter(Router $router);
}