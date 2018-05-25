<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "practice";

$db_connection = mysqli_connect($hostname, $username, $password, $database);

if (!$db_connection) {
    die ("Connection failed.<br>");
}

?>