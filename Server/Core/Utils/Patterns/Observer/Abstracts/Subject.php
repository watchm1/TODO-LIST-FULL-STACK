<?php

namespace Core\Utils\Patterns\Observer\Abstracts;


use Core\Storage\Virtual\Base\ICollection;
use Core\Storage\Virtual\Base\ICollectionObject;

abstract class Subject implements ICollectionObject
{
    /** @var ICollection<Observer> $observers*/
    protected ICollection $observers;

    /**
     * @param Observer $observer
     * @return void
     */
    public function AddObserver(Observer $observer) : void
    {
        if(!in_array($observer, $this->observers->GetAll()))
        {
            $this->observers->Add($observer);
        }
    }
    public function Notify():void
    {
        foreach ($this->observers->GetAll() as $observer)
        {
            if($observer instanceof Observer)
            {
                $observer->Update();
            }
        }
    }
}