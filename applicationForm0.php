
<?php

$name = $_POST['fname'];
$bdate = $_POST['bdate'];
$email = $_POST['email'];
$address = $_POST['address'];
$phonenumber = $_POST['phonenumber'];
$gname = $_POST['gname'];
$gphone = $_POST['gphone'];
$gaddress = $_POST['gaddress'];

$sport = $_POST['sport'];
$outline = $_POST['outline'];
$school = $_POST['school'];

$annual = $_POST['annual'];
$competitive = $_POST['competitive'];
$persong = $_POST['persong'];
$clubGroup = $_POST['clubGroup'];
$trained = $_POST['trained'];
$inputfile = $_POST['inputfile'];


$date=date_create($bdate);
$bdate = date_format($date,"d/m/Y");


//$to = "community@42point1.com,marketing@42point1.com";
$to = "ankit.shah@infoanalytica.com";
$subject = "APPLICATION FORM";


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
 <th class='back_header' colspan='6'>APPLICATION FORM</th>
</tr>
<tr>
 <td width='20%' colspan='2'><strong>Name</strong></td>
 <td colspan='4'>".$name."</td>
</tr>
<tr>
 <td colspan='2'><strong>Date</strong></td>
 <td colspan='4'>".$bdate."</td>
</tr>
<tr>
 <td colspan='2'><strong>Address</strong></td>
 <td colspan='4'>".$address."</td>
</tr>
<tr>
 <td colspan='2'><strong>Email</strong></td>
 <td colspan='4'>".$email."</td>
</tr>
<tr>
 <td colspan='6'><strong>Guardian:</strong></td>
</tr>
<tr>
 <td colspan='2'><strong>Full Name</strong></td>
 <td colspan='4'>".$gname."</td>
</tr>
<tr>
 <td colspan='2'><strong>Phone Number</strong></td>
 <td colspan='4'>".$gphone."</td>
</tr>
<tr>
 <td colspan='2'><strong>Address</strong></td>
 <td colspan='4'>".$gaddress."</td>
</tr>
<tr>
 <td colspan='6'><strong>Others:</strong></td>
</tr>
<tr>
 <td colspan='6'><strong>Sport you would like to pursue:</strong></td>
</tr>
<tr>
 <td colspan='6'>".$sport."</td>
</tr>
<tr>
 <td colspan='6'><strong>Outline all your competitive performances of the last 3 years. Include significant milestones, awards or achievements:</strong></td>
</tr>
<tr>
 <td colspan='6'>".$outline."</td>
</tr>
<tr>
 <td colspan='6'><strong>What school are you enrolled in? If already, graduated, what school and year?</strong></td>
</tr>
<tr>
 <td colspan='6'>".$school."</td>
</tr>
<tr>
 <td colspan='6'><strong>Annual Family Income:</strong></td>
</tr>
<tr>
 <td colspan='6'>".$annual."</td>
</tr>
<tr>
 <td colspan='6'><strong>Outline all your competitive goals for the next 3 years:</strong></td>
</tr>
<tr>
 <td colspan='6'>".$competitive."</td>
</tr>
<tr>
 <td colspan='6'><strong>Why do you think you (or the person you are applying for this program) deserves a spot? Please elaborate:</strong></td>
</tr>
<tr>
 <td colspan='6'>".$persong."</td>
</tr>
<tr>
 <td colspan='6'><strong>Are you part of any active club or group in your sporting community? If yes, which ones?</strong></td>
</tr>
<tr>
 <td colspan='6'>".$clubGroup."</td>
</tr>
<tr>
 <td colspan='6'><strong>Have you trained under (or currently have) a coach? If so, please provide name and contact number.</strong></td>
</tr>
<tr>
 <td colspan='6'>".$trained."</td>
</tr>
<tr>
 <td colspan='6'><strong>Sport you would like to pursue:</strong></td>
</tr>
<tr>
 <td colspan='6'>".$sport."</td>
</tr>
<tr>
 <td colspan='6'><strong>Sport you would like to pursue:</strong></td>
</tr>
<tr>
 <td colspan='6'>".$sport."</td>
</tr>
<tr>
 <td colspan='6'><strong>Sport you would like to pursue:</strong></td>
</tr>
<tr>
 <td colspan='6'>".$sport."</td>
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
echo "<script type='text/javascript'>window.location.href = 'http://42point1.com/adopt.php';</script>";



?>
