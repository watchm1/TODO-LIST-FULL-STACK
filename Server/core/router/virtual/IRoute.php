<?php



interface IRoute {
    public function AddMiddleware($middleware);
    public function RegisterToRouter(Router $router);
}