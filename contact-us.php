<!DOCTYPE HTML>
<html>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Contact-Us | 42.1</title>
	<link rel="shortcut icon" type="image/png" href="image/favicon.png"/>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.0.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/contact.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- //end-smoth-scrolling -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KM4X7LN');</script>
	<!-- End Google Tag Manager -->

	<script>
		function formSubmit(){
			alert("Thank you for your interest, we will get back to you shortly!");
			document.getElementById("myForm").submit();
			return true;
		}
	</script>
</head>
<body> 
	<?php include "include/header.php" ?>
	<!--banner start here-->
	<div class="contactbanner">
		<div class="container">
			<div class="banner-inner">
				<h1>CONTACT US</h1>
			</div>
		</div>
	</div>
	<!--banner end here-->
	
	<div style="margin-top:-20px;">
	<!--sitemap start here-->
		<div class="container">
			<div class="col-md-12 sitemap-margin">
			<br><br>
                <h1 class="text-center" style="margin-bottom:25px;">Let's connect</h1>
                <form action="contactSend.php" id="myForm" onsubmit="return formSubmit();" method="post">
					<div class="contact-bottom">
						<div class="col-md-1">&nbsp;</div>
						<div class="col-md-5 contact-left1">
							<input type="text" placeholder="First Name*" name="contactfname" required="">
						</div>
						<div class="col-md-5 contact-left1">
							<input type="text" placeholder="Last Name*" name="contactlname" required="">
						</div>
						<div class="clearfix"> </div>
						<div class="col-md-1"></div>
						<div class="col-md-5 contact-left1">
							<input type="email" placeholder="Email*" name="contactemail" required="">
						</div>
						<div class="col-md-5 contact-left1">
							<input type="text" placeholder="Mobile Number*" name="contactmobilenumber" required="">
						</div>
						<div class="clearfix"> </div>
						<div class="col-md-1"></div>
						<div class="col-md-10 contact-left1">
							<textarea maxlength="5000" rows="5" placeholder="Message" name="contactmessage"></textarea>
						</div>
						<div class="col-md-12 contact-right text-center">
							<input type="submit" id="subscribeButton" class="btnout white text-uppercase" value="Submit">
							<br><br><br>
						</div>
					</div>
				</form>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5193.755874709274!2d72.50095269533935!3d23.00393699773493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x26b1b59c72a718ab!2s42point1!5e0!3m2!1sen!2sin!4v1566466374069!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
<!--footer start here-->
	<?php include "include/footer.php" ?>
<!--footer end here-->
</body>
</html>
