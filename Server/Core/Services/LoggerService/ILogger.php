<?php

namespace Core\Service\LoggerService;
use Core\Service\Base\BaseService;
use Core\Utils\Constants\LOGTYPE;

interface ILogger
{
    function LogInfo(string $message):void;
    function LogError(string $message): void;
    function LogWarning(string $message):void;
    function LogDebug(string $message): void;
    function LogToConsole(string $message) : void;
}