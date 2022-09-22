<?php

class Person {
    // Properties
    private $name;
    private $eyeColor;
    private $age;

    // static properties
    public static $drinkingAge = 18;
    
    public function __construct($name, $eyeColor, $age){
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // Methods
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }


    // for reference public static properties use self:: keyword
    // instead of $this
    // we can access static properties from a regular method
    public function getDrinkingAge(){
        return self::$drinkingAge;
    }

    // static method 
    public static function setDrinkingAge($newDA){
        self::$drinkingAge = $newDA;
    } 

}
