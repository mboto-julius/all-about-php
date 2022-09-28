<?php

// check if cookie is set
if (isset($_COOKIE['name'])) {
    echo 'User ' . $_COOKIE['name'] . ' is set<br>';
} else {
    echo 'User is not set';
}
