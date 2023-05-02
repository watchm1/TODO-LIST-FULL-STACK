<?php
namespace Core\Storage\Virtual\Base;

interface IRepository
{
    public function GetAll(): array;
    public function GetOne(): IEntity;
    public function CreateOne(IEntity $entity): IEntity;
    public function UpdateOne(IEntity $updatedEntity): IEntity;
    public function Delete(int $id):bool;
}