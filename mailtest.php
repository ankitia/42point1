<?php
    if(isset($_POST['submit']))
    {




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
			//$inputfile = $_POST['inputfile'];


			$date=date_create($bdate);
			$bdate = date_format($date,"d/m/Y");







        //The form has been submitted, prep a nice thank you message
        $output = '<h1>Thanks for your file and message!</h1>';
        //Set the form flag to no display (cheap way!)
        $flags = 'style="display:none;"';

        //Deal with the email
        $to = 'ankit.shah@infoanalytica.com';
        $subject = 'a file for you';

        $message = strip_tags($_POST['message']);
        $attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
        $filename = $_FILES['file']['name'];

        $boundary =md5(date('r', time()));

        $headers = "From: webmaster@example.com\r\nReply-To: webmaster@example.com";
        $headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

        $message="This is a multi-part message in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment

$attachment
--_1_$boundary--";

        mail($to, $subject, $message, $headers);
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MailFile</title>
</head>

<body>

<?php echo $output; ?>

<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" <?php echo $flags;?>>
	<div class="form-group col-md-12">
		<p class="txt-clr text-center mg-tp-20"><strong>APPLICATION FORM</strong></p>
	</div>

	<div class="form-row">
	<div class="form-group col-md-6">
		<label for="inputName">Full Name</label>
		<input type="text" class="form-control" id="inputName" name="fname" required placeholder="Full Name">
	</div>
	<div class="form-group col-md-6">
		<label for="inputDOB">Date of Birth</label>
		<input type="date" class="form-control" id="inputDOB" name="bdate" required placeholder="Date of Birth">
	</div>
	</div>
	<div class="form-group col-md-12">
	<label for="inputAddress">Address</label>
	<input type="text" class="form-control" id="inputAddress" name="address" required placeholder="Address">
	</div>
	<div class="form-group col-md-6">
		<label for="inputEmail4">Email</label>
		<input type="email" class="form-control" id="inputEmail4" name="email" required placeholder="Email">
	</div>
	<div class="form-group col-md-6">
		<label for="inputPhone">Phone Number</label>
		<input type="text" class="form-control" id="inputPhone" maxlength="10" name="phonenumber" required placeholder="Phone Number">
	</div>

	<div class="form-group col-md-12">
		<label for="inputAddress">Guardian:</label>
	</div>

	<div class="form-group col-md-6">
		<label for="inputGName">Full Name</label>
		<input type="text" class="form-control" id="inputGName" name="gname" placeholder="Full Name">
	</div>
	<div class="form-group col-md-6">
		<label for="inputGPhone">Phone Number</label>
		<input type="text" class="form-control" id="inputGPhone" name="gphone" maxlength="10" placeholder="Phone Number">
	</div>
	<div class="form-group col-md-12">
		<label for="inputGAddress">Address</label>
		<input type="text" class="form-control" id="inputGAddress" name="gaddress" placeholder="Address">
	</div>

	<div class="form-group col-md-12">
		<label for="inputAddress">Others:</label>
	</div>
	<div class="form-group col-md-12">
		<label for="inputGAddress">Sport you would like to pursue:</label>
		<input type="text" class="form-control" id="inputGAddress" name="sport" placeholder="Sport you would like to pursue">
	</div>
	<div class="form-group col-md-12">
		<label for="inputGAddress">Outline all your competitive performances of the last 3 years. Include significant milestones, awards or achievements:</label>
		<input type="text" class="form-control" name="outline" id="inputGAddress" placeholder="Outline all your competitive performances of the last 3 years. Include significant milestones, awards or achievements">
	</div>
	<div class="form-group col-md-12">
		<label for="inputGAddress">What school are you enrolled in? If already, graduated, what school and year?</label>
		<input type="text" class="form-control" name="school" id="inputGAddress" placeholder="What school are you enrolled in? If already, graduated, what school and year?">
	</div>
	<div class="form-group col-md-12">
		<label for="inputGAddress">Annual Family Income:</label>
		<input type="text" class="form-control" name="annual" id="inputGAddress" placeholder="Annual Family Income">
	</div>
	<div class="form-group col-md-12">
		<label for="inputGAddress">Outline all your competitive goals for the next 3 years:</label>
		<input type="text" class="form-control" name="competitive" id="inputGAddress" placeholder="Outline all your competitive goals for the next 3 years">
	</div>
	<div class="form-group col-md-12">
	 <label for="inputGAddress">Why do you think you (or the person you are applying for this program) deserves a spot? Please elaborate:</label>
	 <input type="text" class="form-control" id="inputGAddress" name="persong" placeholder="Why do you think you (or the person you are applying for this program) deserves a spot? Please elaborate">
	</div>
	<div class="form-group col-md-12">
	 <label for="inputGAddress">Are you part of any active club or group in your sporting community? If yes, which ones?</label>
	 <input type="text" class="form-control" id="inputGAddress" name="clubGroup" placeholder="Are you part of any active club or group in your sporting community? If yes, which ones?">
	</div>
	<div class="form-group col-md-12">
	 <label for="inputGAddress">Have you trained under (or currently have) a coach? If so, please provide name and contact number.</label>
	 <input type="text" class="form-control" id="inputGAddress" name="trained" placeholder="Have you trained under (or currently have) a coach? If so, please provide name and contact number.">
	</div>
	<div class="form-group col-md-5">
	 <label for="inputAttachments">Please upload supporting documents:</label>
		 <ul>
			 <li>ID Proof</li>
			 <li>Address Proof</li>
			 <li>Financial Proof</li>
			 <li>Rewards and Certifications</li>
			 <li>School Certifications</li>
			 <li>NOC from your current coach/ trainer/ school</li>
		 </ul>
	 <input type="file" class="form-control" id="attachment" name="attachment" placeholder="">
	</div>
	<div class="form-group col-md-8">&nbsp;</div>
	<div class="form-group col-md-12">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
	</div>

	</div>

</form>
</body>
</html>
