<?php

namespace Core\Utils\Patterns\Observer\Abstracts;

use Core\Storage\Virtual\Base\ICollectionObject;

abstract class Observer implements ICollectionObject
{
    public abstract function Update():void;
}