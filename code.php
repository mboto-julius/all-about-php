<?php

session_start();
require 'dbconnection.php';

if(isset($_POST['save']))
{
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $course = mysqli_real_escape_string($connection, $_POST['course']);

    $query = "INSERT INTO students (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$course')";

    $query = mysqli_query($connection, $query);

    if($query){
        $_SESSION['message'] = "student created successfully";
        header("location: student-create.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "student not created";
        header("location: student-create.php");
    }
}


?>