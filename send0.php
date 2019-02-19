
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

 function mail_attachment ($from , $to, $subject, $message, $attachment){
   $fileatt = $attachment; // Path to the file
         $fileatt_type = "application/octet-stream"; // File Type

         $start = strrpos($attachment, '/') == -1 ?
            strrpos($attachment, '//') : strrpos($attachment, '/')+1;

         $fileatt_name = substr($attachment, $start,
            strlen($attachment)); // Filename that will be used for the
            file as the attachment

            $email_from = $from; // Who the email is from
        $subject = "New Attachment Message";

        $email_subject =  $subject; // The Subject of the email
        $email_txt = $message; // Message that the email has in it
        $email_to = $to; // Who the email is to

        $headers = "From: ".$email_from;
        $file = fopen($fileatt,'rb');
        $data = fread($file,filesize($fileatt));
        fclose($file);

        $msg_txt="\n\n You have recieved a new attachment message from $from";
        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . "
           boundary=\"{$mime_boundary}\"";

        $email_txt .= $msg_txt;

        $email_message .= "This is a multi-part message in MIME format.\n\n" .
           "--{$mime_boundary}\n" . "Content-Type:text/html;
           charset = \"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" .
           $email_txt . "\n\n";

        $data = chunk_split(base64_encode($data));

        $email_message .= "--{$mime_boundary}\n" . "Content-Type: {$fileatt_type};\n" .
           " name = \"{$fileatt_name}\"\n" . //"Content-Disposition: attachment;\n" .
           //" filename = \"{$fileatt_name}\"\n" . "Content-Transfer-Encoding:
           base64\n\n" . $data . "\n\n" . "--{$mime_boundary}--\n";

        $ok = mail($email_to, $email_subject, $email_message, $headers);

        if($ok) {
           echo "File Sent Successfully.";
           unlink($attachment); // delete a file after attachment sent.
        }else {
           die("Sorry but the email could not be sent. Please go back and try again!");
        }
     }
     move_uploaded_file($_FILES["filea"]["tmp_name"],
        'temp/'.basename($_FILES['filea']['name']));

     mail_attachment("$from", "youremailaddress@gmail.com",
        "subject", "message", ("temp/".$_FILES["filea"]["name"]));
 }

?>
