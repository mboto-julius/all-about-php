<?php 

// LOAD CLASSES AUTOMATICALLY
function myAutoloader(){
    foreach (glob("./classes/*.php") as $filename)
{
    include $filename;
}
  }
  
  spl_autoload_register('myAutoloader');

?>