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

    function get_name()
    {
        return $this->name;
    }

    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit("apple", "green");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
