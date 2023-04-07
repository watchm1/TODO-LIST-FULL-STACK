<?php

namespace Core\Service\Middleware;

class BaseMiddleware {
    private $handler;

    public function __construct($handler)
    {
        $this->handler = $handler;
    }
    public function __invoke()
    {
        $this->handler();
    }
}