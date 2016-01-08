<?php

$server = "localhost";
$user = "root";
$password = "6710omne8864";
$db = "shoppingcart";

$link = mysqli_connect($server, $user, $password) or die("Sorry, MySQL is not available");
mysqli_select_db($link, $db) or die("Sorry, database is not available.");