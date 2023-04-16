<?php


class BaseMiddleware {
    private mixed $handler;

    public function __construct($handler)
    {
        $this->handler = $handler;
    }
    public function __invoke()
    {
        $this->handler();
    }
}