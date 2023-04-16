<?php

include './IConfig.php';
include '../../vendor/autoload.php';
use Dotenv\Dotenv;
class EnvironmentConfiguration implements IConfig
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