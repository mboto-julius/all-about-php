<?php

// $this keyword refers to the current object and is only available inside a methods

class Fruit
{
    public $name;
}

$apple = new Fruit();
$apple->name = "Apple";

echo $apple->apple;
