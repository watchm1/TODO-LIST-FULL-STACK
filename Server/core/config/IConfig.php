<?php


interface IConfig {
    public function MigrateConfiguration(); // .env file
    public function GetConfigDictionary(): array;
}