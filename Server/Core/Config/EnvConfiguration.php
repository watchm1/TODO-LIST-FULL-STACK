<?php

namespace Core\Config;
use Dotenv\Dotenv;

include_once './Config/IConfig.php';

class EnvConfiguration implements IConfig
{
    private array $config = array();
    public function MigrateConfiguration($path):void
    {
        //read .env file
        $dotenv = Dotenv::createImmutable($path);
        $dotenv->load();
        $this->config = array('test' => $_ENV['TEST_VARIABLE']);
    }
    public function GetConfigDictionary(): array
    {
        return $this->config;
    }
}