<?php 

$connection = mysqli_connect("localhost","student","mysql-Password-2022","studentcrud");

if(!$connection){
    die('connection failed'. mysqli_connect_error());
}

?>