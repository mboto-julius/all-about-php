<?php

$name = $_POST['name'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {
    echo "successfully login";
    echo "<br>";
    echo "<br>";
    echo "Welcome : {$name}";
}
