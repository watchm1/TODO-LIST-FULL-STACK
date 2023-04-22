<?php

namespace Core\Config;
interface IConfig {

    public function MigrateConfiguration($path); // .env file
    public function GetConfigDictionary(): array;
}