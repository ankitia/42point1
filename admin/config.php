<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "42point1";
/*
$username = "ia_infoanalytica";
$password = "42point1@2!0!9)";
$database = "ia_infoanalytica";
*/
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
