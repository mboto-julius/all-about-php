<?php

// $this keyword refers to the current object and is only available inside a methods

class Fruit
{
    public $name;
    function set_name($name)
    {
        $this->name = $name;
    }
}

$apple = new Fruit();
$apple->set_name('Apple');

echo $apple->apple;
