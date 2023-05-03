<?php

namespace Core\Storage\Concrete;

use Core\Storage\Virtual\Base\ICollection;
/**
 * @template T
 * @template-implements ICollection<T>
 */
class Collection implements ICollection
{
    /**
    * @var array<T>
    */
    private array $collection = [];
    /**
    * @param T $collectionObject
    */
    public function Add($collectionObject):void
    {
        if(!$this->Contains($collectionObject))
            $this->collection[] = $collectionObject;
    }
    /**
     * @param T $collectionObject
     * @return bool
     */
    public function Contains($collectionObject):bool
    {
        if(in_array($collectionObject, $this->collection))
            return true;
        else
            return false;
    }
    /**
     * @param T $collectionObject
     */
    public function Remove($collectionObject):void
    {
        $key = array_search($collectionObject, $this->collection);
        if($key !== false)
            unset($this->collection[$key]);
    }

    public function Clear():void
    {
        $this->collection = [];
    }

    public function GetSizeOfCollection(): int
    {
        return sizeof($this->collection);
    }

    /**
     * @return array<T>
     */
    public function GetAll():array
    {
        return $this->collection;
    }
}