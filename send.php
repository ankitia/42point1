
<?php

$name = $_POST['name'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$address = $_POST['address'];
$comment = $_POST['comment'];

$to = "community@42point1.com,marketing@42point1.com";
$subject = "GET IN TOUCH";

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
 <th class='back_header' colspan='2'>GET IN TOUCH</th>
</tr>
<tr>
 <td width='20%'><strong>Name</strong></td>
 <td>".$name."</td>
</tr>
<tr>
 <td><strong>Mobile Number</strong></td>
 <td>".$mobilenumber."</td>
</tr>
<tr>
 <td><strong>Email</strong></td>
 <td>".$email."</td>
</tr>
<tr>
 <td><strong>Address</strong></td>
 <td>".$address."</td>
</tr>
<tr>
 <td><strong>Comments</strong></td>
 <td>".$comment."</td>
</tr>
</table>
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
