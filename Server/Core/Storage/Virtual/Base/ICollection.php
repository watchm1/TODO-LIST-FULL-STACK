<?php

namespace Core\Storage\Virtual\Base;

/**
 * @template T of ICollectionObject
 */
interface ICollection {
    /**
     * @param T $collectionObject
     */
    public function Add($collectionObject):void;

    /**
     * @param T $collectionObject
     * @return bool
     */
    public function Contains($collectionObject):bool;

    /**
     * @param T $collectionObject
     */
    public function Remove($collectionObject):void;
    public function Clear():void;
    public function GetSizeOfCollection(): int;
    /**
     * @return array<T>
     */
    public function GetAll():array;

}