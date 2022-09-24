<?php 


class Cars{

  function greating(){

  }

  function greating1(){

  }

  function greating2(){
    
  }

  function greating3(){
    
  }

}

// $my_classes = get_declared_classes();

// foreach($my_classes as $class){
//   echo $class . "<br>";
// }

// getting methods of classes

$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method){
  echo $method . "<br>";
}

?>