<?php

namespace Core\Utils\Patterns\Observer\Abstracts;

use Core\Storage\Virtual\Base\IEntity;

abstract class Observer implements IEntity
{
    public abstract function Update():void;
}