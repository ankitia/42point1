<?php
include("config.php");

if($_POST["mobileNumber"])
{
  $mobileNumber = $_POST["mobileNumber"];
  $query =  "select * from registration where mobile_number = ".$mobileNumber." limit 0,1";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["name"]. "@&@". $row["email"];
    }
  }

$conn->close();
}
?>
