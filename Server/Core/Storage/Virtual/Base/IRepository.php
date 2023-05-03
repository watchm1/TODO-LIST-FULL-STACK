<?php
namespace Core\Storage\Virtual\Base;
/**
 * @template T of IEntity
 */
interface IRepository
{
    /**
     * @return array<T>
     */
    public function GetAll(): array;

    /**
     * @return T
     */
    public function GetOne(): mixed;

    /**
     * @param T $entity
     * @return T
     */
    public function CreateOne($entity): mixed;

    /**
     * @param T $updatedEntity
     * @return IEntity
     */
    public function UpdateOne($updatedEntity): mixed;

    /**
     * @param int $id
     */
    public function Delete(int $id);
}