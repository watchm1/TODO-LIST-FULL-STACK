<?php

namespace Core\Storage\Virtual;

use Core\Storage\Virtual\Base\IEntity;

abstract class EntityList
{
    protected array $entities;
    public function Add(IEntity $entity)
    {
        if(!$this->Contains($entity))
            $this->entities[] = $entity;
    }
    public function Remove(IEntity $entity)
    {
        $key = array_search($entity, $this->entities);
        if($key !== false)
            unset($this->entities[$key]);
    }
    public function Contains(IEntity $entity): bool
    {
        if(in_array($entity, $this->entities))
            return true;
        else
            return false;
    }
    public function Clear()
    {
        $this->entities = array();
    }
    public function Count(): int
    {
        return count($this->entities);
    }
    public function GetAll(): array
    {
        return $this->entities;
    }
}