<?php
include("config.php");
echo "--".$_POST["name"];
if($_POST["name"])
{
  echo "true";
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
//$isMember = $_POST["isMember"];
$isMember = "";
$visitMealamile = $_POST["visitMealamile"];
$visitRecovery = $_POST["visitRecovery"];
// Here, you can also perform some database query operations with above values.
//echo "Welcome ". $name ."!"; // Success Message

//var $query =  "insert into registration (name,mobile_number,email,member,meal_a_mile,recovery_zone)
//values()";

$query =  "insert into registration (name,mobile_number,email,member,meal_a_mile,recovery_zone) values('".$name."','".$mobile."','".$email."','".$isMember."','".$visitMealamile."','".$visitRecovery."')";
if ($conn->query($query) === TRUE) {
    echo "Registration successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
}
?>
