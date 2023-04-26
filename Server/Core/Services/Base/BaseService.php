<?php

namespace Core\Service\Base;

use Core\Service\LoggerService\ILogger;

abstract class BaseService
{
    protected ILogger $_logger;
    public abstract function __construct(ILogger $logger);
}