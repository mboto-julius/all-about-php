<?php 


class Cars{
  var $wheels = 6;
}

class Trunks extends Cars{

}


$tacoma = new Trunks();
echo $tacoma->wheels;


