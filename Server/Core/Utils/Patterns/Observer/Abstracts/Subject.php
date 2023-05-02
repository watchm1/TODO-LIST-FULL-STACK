<?php

namespace Core\Utils\Patterns\Observer\Abstracts;

use Core\Storage\Virtual\EntityList;

abstract class Subject
{
    protected EntityList $observers;
    public function AddObserver(Observer $observer)
    {
        if(!in_array($observer, $this->observers->GetAll()))
        {
            $this->observers[] = $observer;
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