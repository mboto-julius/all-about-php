<?php

class Fruit
{
    //properties
    public $name;
    public $color;

    // methods
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        $this->color = $color;
    }

    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('apple');
$apple->set_color('green');
$banana->set_name('banana');
$banana->set_color('yellows');

echo $apple->get_name();
echo '<br>';
echo $apple->get_color();
echo '<br>';
echo $banana->get_name();
echo '<br>';
echo $banana->get_color();
