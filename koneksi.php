<?php
$local = "localhost";
$user = "root";
$password = "";
$db = "timetracer";

$mysqli = new mysqli($local, $user, $password, $db);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
?>