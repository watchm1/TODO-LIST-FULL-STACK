<?php
namespace Core\Service\Server;
use Core\Service\Config\IConfig;

abstract class App {
    private $config = array();
    public function __construct(IConfig $configurationService)
    {
        $configurationService->MigrateConfiguration();   
        $this->config = $configurationService->GetConfigDictionary();
    }
    public abstract function RunApp();  
} 