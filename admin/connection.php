<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "42point1";

// Create connection
$db = new mysqli($servername, $username, $password,$database);
 
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
echo "Connected successfully";
?>
