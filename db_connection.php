<?php
$server = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "hotel_batana"; 


$conn = new mysqli($server, $username, $password, $database);


if ($conn->connect_error) {
    die("Greška pri povezivanju: " . $conn->connect_error);
}

$conn->set_charset("utf8");

?>
