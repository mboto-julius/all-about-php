<?php

$connection = mysqli_connect('localhost', 'mboto', 'mysql-Passowrd-2022', 'loginapp');

if ($connection) {
    echo "connection success!";
} else {
    die('connection fail!');
}
