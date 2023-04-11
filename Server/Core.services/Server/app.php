<?php
namespace Core\Service\Server;
use Base\Service\Router\Concrete\Router;
use Base\Service\Router\Virtual\IRouter;
use Core\Service\Config\IConfig;


abstract class App {
    protected $config = array();
    protected $Routers = array();
    public function __construct(IConfig $configurationService)
    {
        $configurationService->MigrateConfiguration();   
        $this->config = $configurationService->GetConfigDictionary();
    }
    public abstract function RunApp($routers = array()); 
}