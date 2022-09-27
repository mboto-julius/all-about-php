<?php

session_start();
require 'dbconnection.php';

// delete data
if(isset($_POST['delete'])){
    $id = mysqli_real_escape_string($connection, $_POST['delete']);

    $query = "DELETE FROM students WHERE id='$id'";

    $query = mysqli_query($connection, $query);

    if($query)
    {
        $_SESSION['message'] = "student deleted successfully";
        header("Location: index.php");
        exit(0);
    }else{
        $_SESSION['message'] = "student not deleted";
        header("Location: index.php");
        exit(0);
    }
}


// update data into the database
if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $course = mysqli_real_escape_string($connection, $_POST['course']);

    // query to update the database
    $query = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' 
              WHERE id='$id'";

   
    $query = mysqli_query($connection, $query);

    if($query){
        $_SESSION['message'] = "student updated successfully";
        header("Location: index.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "student not updated";
        header("Location: index.php");
        exit(0);
    }
}

// insert data into the database
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
        header("Location: student-create.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "student not created";
        header("Location: student-create.php");
        exit(0);
    }
}


?>