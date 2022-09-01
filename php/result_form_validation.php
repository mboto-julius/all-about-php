<?php

// normal case
// $username = $_POST['username'];
// $password = $_POST['password'];

// security case
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');


if (empty($username)) {
    $name_error = "please enter your username";
} elseif (strlen($username) < 6) {
    $name_error = "your username needs to have a minimum of 6 letters";
}

if (empty($password)) {
    $pass_error = "please enter your password";
} elseif (strlen($password) < 6) {
    $pass_error = "your password needs to have a minimum length of 6";
}

if (empty($name_error) && empty($pass_error)) {
    include("success.php");
} else {
    include("form_validation.php");
}
