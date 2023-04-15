<?php

class EnvironmentConfiguration implements IConfig
{
    private $config = array();
    public function MigrateConfiguration()
    {
        //read .env file
    }
    public function GetConfigDictionary()
    {
        return $this->config;
    }
}