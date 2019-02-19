
<?php

$name = $_POST['fname'];
$lname = $_POST['lname'];
$profession = $_POST['profession'];
$mobilenumber = $_POST['mobilenumber'];
$bdate = $_POST['bdate'];
$email = $_POST['email'];
$age = $_POST['age'];
$running = $_POST['running'];

$longDist = $_POST['longDist'];
$cycling = $_POST['cycling'];
$swimming = $_POST['swimming'];
$triathlons = $_POST['triathlons'];

$training = $_POST['training'];
$tech = $_POST['tech'];
$nutrition = $_POST['nutrition'];
$injury = $_POST['injury'];
$racing = $_POST['racing'];
$otherDetails = $_POST['otherDetails'];
$otherGuidance = $_POST['otherGuidance'];

$date=date_create($age);
$age = date_format($date,"d/m/Y");

if($running=="on"){
  $running = "<input type='checkbox' checked disabled> ";
}
if($longDist=="on"){
  $longDist = "<input type='checkbox' checked disabled> ";
}if($cycling=="on"){
  $cycling = "<input type='checkbox' checked disabled> ";
}if($swimming=="on"){
  $swimming = "<input type='checkbox' checked disabled> ";
}if($triathlons=="on"){
  $triathlons = "<input type='checkbox' checked disabled> ";
}if($training=="on"){
  $training = "<input type='checkbox' checked disabled> ";
}if($tech=="on"){
  $tech = "<input type='checkbox' checked disabled> ";
}if($nutrition=="on"){
  $nutrition = "<input type='checkbox' checked disabled> ";
}if($injury=="on"){
  $injury = "<input type='checkbox' checked disabled> ";
}if($racing=="on"){
  $racing = "<input type='checkbox' checked disabled> ";
}

if($otherGuid=="on"){
  $otherGuid = "<input type='checkbox' checked disabled> ";
}


$agree = "<input type='checkbox' checked disabled> ";


$to = "community@42point1.com,marketing@42point1.com";
//$to = "ankit.shah@infoanalytica.com";
$subject = "MEMBERSHIP FORM";


$message = "
<html>
<head>
<title>HTML email</title>
<style>
table, th, td {
   border: 1px solid black;
   border-collapse: collapse;
}
th, td {
   padding: 15px;
}
.back_header{
background: #B2D430;
}
</style>
</head>
<body>

<table border='1' width='500' >
<tr>
 <th class='back_header' colspan='6'>MEMBERSHIP FORM</th>
</tr>
<tr>
 <td width='20%' colspan='2'><strong>First Name</strong></td>
 <td colspan='4'>".$name."</td>
</tr>
<tr>
 <td width='20%' colspan='2'><strong>Last Name</strong></td>
 <td colspan='4'>".$lname."</td>
</tr>
<tr>
 <td colspan='2'><strong>Email</strong></td>
 <td colspan='4'>".$email."</td>
</tr>
<tr>
 <td colspan='2'><strong>Mobile Number</strong></td>
 <td colspan='4'>".$mobilenumber."</td>
</tr>
<tr>
 <td colspan='2'><strong>Profession</strong></td>
 <td colspan='4'>".$profession."</td>
</tr>
<tr>
 <td colspan='2'><strong>Date</strong></td>
 <td colspan='4'>".$age."</td>
</tr>
  <tr>
    <td colspan='6'><strong>Interests:</strong></td>
  </tr>
  <tr>
   <td><strong>Running</strong></td>
   <td>".$running."</td>
   <td><strong>Cycling</strong></td>
   <td>".$cycling."</td>
   <td><strong>Triathlons</strong></td>
   <td>".$triathlons."</td>
  </tr>
  <tr>
   <td><strong>Long Distance Running</strong></td>
   <td>".$longDist."</td>
   <td><strong>Swimming</strong></td>
   <td>".$swimming."</td>
   <td><strong>Others</strong></td>
   <td>".$otherDetails."</td>
  </tr>
  <tr>
    <td colspan='6'><strong>Looking for Guidance on:</strong></td>
  </tr>
  <tr>
   <td><strong>Training & Workouts</strong></td>
   <td>".$training."</td>
   <td><strong>Nutrition & Diet</strong></td>
   <td>".$nutrition."</td>
   <td><strong>Racing</strong></td>
   <td>".$racing."</td>
  </tr>
  <tr>
   <td><strong>Tech & Gear</strong></td>
   <td>".$tech."</td>
   <td><strong>Injury Prevention</strong></td>
   <td>".$injury."</td>
   <td><strong>Others</strong></td>
   <td>".$otherGuidance."</td>
  </tr>
  <tr>
    <td colspan='6'><strong>".$agree." I agree to the Terms & Conditions</strong></td>
  </tr>
</table>
".
$training


."
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <marketing@42point1.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
echo "<script type='text/javascript'>window.location.href = 'http://42point1.com/';</script>";



?>
