<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "onlineshop";

// Create connection
//$con = mysqli_connect($servername, $username, $password,$db);
$password = getenv('MYSQL_SECURE_PASSWORD');
$conn = new mysqli($servername, $username, $password);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

