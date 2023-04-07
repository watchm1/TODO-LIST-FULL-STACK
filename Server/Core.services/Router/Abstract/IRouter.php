<?php
namespace Base\Service\Router\Virtual;
interface IRouter {
    public function AddRoute($method, $path, $handler, $middleware);
    public function HandleRequest($method, $url);
} 