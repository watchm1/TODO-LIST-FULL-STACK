<?php

namespace Core\Service\Config;
interface IConfig {
    public function MigrateConfiguration(); // .env file
    public function GetConfigDictionary(): array;
}