<?php

namespace Base\Service\Router\Virtual;

interface IRoute {
    public function AddMiddleware($middleware);
    public function RegisterToRouter($router);
}