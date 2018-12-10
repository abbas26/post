<?php
$servername = "localhost";
$username   = "root";
$password   = "pau";
$dbname     = "point_of_sale";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error()); //untuk memunculkan eror
}

?>
