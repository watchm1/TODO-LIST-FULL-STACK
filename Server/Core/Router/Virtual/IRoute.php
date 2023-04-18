<?php

namespace Core\Router\Virtual;
include_once './Router/Concrete/Router.php';
use Core\Router\Concrete\Router;

interface IRoute {
    public function AddMiddleware($middleware);
    public function RegisterToRouter(Router $router);
}