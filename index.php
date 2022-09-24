<?php 


class Cars{

  var $wheel_count = 4;
  var $door_count = 10;

  function carDetails(){

    return "This car has " .$this->wheel_count. " Wheels"; 

  }

}

// instantiating a class
$bmw = new Cars();
$mercedes = new Cars();

// output from function
echo "<br>";
echo $bmw->wheel_count;
echo "<br>";
echo $bmw->door_count;
echo "<br>";
echo $bmw->carDetails();
echo "<br>";
echo $mercedes->carDetails();
echo "<br>";
echo $mercedes->door_count;
echo "<br>";
echo $mercedes->wheel_count;