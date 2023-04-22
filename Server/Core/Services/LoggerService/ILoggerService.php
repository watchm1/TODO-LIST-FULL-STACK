<?php

namespace Core\Service\LoggerService;
use Core\Service\Base\IBaseService;
require_once './Core/Services/Base/IBaseService.php';
interface ILoggerService extends IBaseService
{
    function LogInfo():void;
    function LogError(): void;
    function LogWarning():void;
    function LogDebug(): void;
    function LogToConsole() : void;
}