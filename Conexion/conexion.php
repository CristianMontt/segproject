<?php
$servername = "localhost";
$database = "segprojectcambios";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("No se ha podido conectar: " . mysqli_connect_error());
}
