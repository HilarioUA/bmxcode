<?php
$servername = "localhost";
$database = "bmx";
$username = "root";
$password = "";
// Create connection
$conexion=mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
?>