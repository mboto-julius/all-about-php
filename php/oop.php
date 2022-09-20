<?php

// A constructor allows you to initialize an object's properties upon creation of the object.

class Fruit
{
    public $name;
    public $color;


    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

$apple = new Fruit("apple", "green");
