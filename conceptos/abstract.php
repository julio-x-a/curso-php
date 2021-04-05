<?php

interface IFruit
{
    public function eat1();
}

abstract class Fruit
{
    abstract public function eat();
}

class Apple extends Fruit
{
    function eat()
    {
    }
}
