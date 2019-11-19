<!DOCTYPE HTML>
<html>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<title>42.1</title>
		<link rel="shortcut icon" type="image/png" href="image/favicon.png"/>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<!-- Custom Theme files -->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="keywords" content="" />
		<style>
		* {box-sizing: border-box;}

		.mySlides {display: none;}
		img {vertical-align: middle;}

		/* Slideshow container */
		.slideshow-container {
		  max-width: 100%;
		  position: relative;
		  margin: auto;
			max-height: 315px;
		}

		/* Caption text */
		.text {
			color: #f2f2f2;
			 font-size: 15px;
			 padding: 14px 7px;
			 position: absolute;
			 bottom: 23px;
			 width: 185px;
			 text-align: center;
		}

		/* Number text (1/3 etc) */


		/* The dots/bullets/indicators */
		.dot {
		  height: 13px;
		  width: 13px;
		  margin: 0 2px;
		  background-color: #bbb;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 15s ease;
		}

	/*	.active {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 25.0s;
		  animation-name: fade;
		  animation-duration: 25.0s;
		}

		@-webkit-keyframes fade {
		  from {opacity: 1.4}
		  to {opacity: 2}
		}

		@keyframes fade {
		  from {opacity: 1.4}
		  to {opacity: 2}
		}

		.slider_im{
			width:100%;
			height: 550px;
		}


		.header_btn{
			margin-top: 200px;
		  height: 50px;font-size:15px;background-color:#333;
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 500px) {
		  .text {font-size: 11px}
			.slider_im{
				width:100%;
				height:200px;
			}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (min-device-width: 1500px) and (max-device-width: 1024px) {
			.header_btn{
				margin-top: 250px;
				height: 50px;font-size:15px;background-color:#333;
			}
		}

		.mg-lt-10 {
		  margin-left: 20px !important;
		}
		</style>

<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet">
-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->

<script src='../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script src="../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>


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
<script type="text/javascript">
$( '#subscribeButton' ).click(function() {
  fbq('track', 'Subscribe');
});


function formSubmit(){
		if(ValidCaptcha()){
			alert("Thank you for your interest, we will get back to you shortly!");
			document.getElementById("myForm").submit();
			return true;
		}else{
			alert("Please enter valid captch");
			$("#txtInput").val("");
			$("#txtInput").focus();
		}
		return false;
}

function Captcha(){
	 var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
	 var i;
	 for (i=0;i<6;i++){
	   var a = alpha[Math.floor(Math.random() * alpha.length)];
	   var b = alpha[Math.floor(Math.random() * alpha.length)];
	   var c = alpha[Math.floor(Math.random() * alpha.length)];
	   var d = alpha[Math.floor(Math.random() * alpha.length)];
	   var e = alpha[Math.floor(Math.random() * alpha.length)];
	   var f = alpha[Math.floor(Math.random() * alpha.length)];
	   var g = alpha[Math.floor(Math.random() * alpha.length)];
	  }
	var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
	document.getElementById("mainCaptcha").innerHTML = code
	}
	function ValidCaptcha(){

	  var string1 = removeSpaces(document.getElementById('mainCaptcha').innerHTML);
	  var string2 = removeSpaces(document.getElementById('txtInput').value);

	  if (string1 == string2){
	    return true;
	  }
	  else{
	    return false;
	  }
	}
	function removeSpaces(string){
	return string.split(' ').join('');
	}


   $(function() {
      $( "#datepicker-12" ).datepicker({
				  changeYear:true,
					yearRange: "1955:2010"
			});
      //$( "#datepicker-12" ).datepicker("setDate", "10w+1");
   });




</script>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
	 rel = "stylesheet">
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<style>
.ui-datepicker .ui-datepicker-header{
	color: black;
}
</style>
</head>


<body onload="Captcha();">

<?php include "include/header.php" ?>

<div class="mainbannerin">
	<div class="container">
		<div class="banner-inner-main">
			<a class="btnout_red mg-rt-30  danger mg-bt-30 text-uppercase text-center" href="about-us.php">ABOUT 42.1</a>
		</div>
	</div>
</div>

<!--banner start here
<div class="slideshow-container">
<div class="mySlides fade">
	<img src="image/42.1Banner.jpg" class="slider_im" alt="42.1Banner">
	<h3 class="text-uppercase">About 42.1</h3>
</div>
<div class="mySlides fade">
	<img src="image/42.1Banner.jpg" class="slider_im" alt="42.1Banner">
</div>

</div>-->


<!--
<div style="text-align: center;position: relative; z-index: 155; margin-top: -40px; margin-bottom: 23px;">
  <span class="dot"></span>
  <span class="dot"></span>
</div>
-->

<!--<div class="banner">
	<div class="container">
		<div class="banner-main">
			<h2>Open House</h2>
			<a class="btnout success btn-lg mg-bt-30 mg-tp-120 text-uppercase" href="event.php">Experience 42.1</a>
		</div>
	</div>
</div>-->
<!--banner end here-->
<!---728x90--->

<div class="modal fade" id="termscondition" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	 <div class="modal-dialog">
			 <div class="modal-content">
					 <div class="modal-header" style="background-color: #f2f2f2;">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title modal-head-text"  id="myModalLabel">Terms & Conditions</h4>
					 </div>
					 <div class="modal-body" style="text-align:justify;    margin-right: 30px;">
						 <ul>
							 <li>The core committee solely reserves access and Rights to Membership at 42.1.</li>
							 <li>Members should comply with all the Terms & Conditions of the Community.</li>
							 <li>On approval of the membership, members must pay a nominal fee (at the time of onboarding). The fee shall be communicated later by the core committee.</li>
							 <li>The core committee shall be entitled to terminate the Community Member’s Membership immediately by a notice in writing on or after the breach of one OR more of the Terms & Conditions.</li>
							 	<li>42.1 Community space will be open on weekends only.</li>
								<li>Core committee reserves rights on the access and can keep the premise close without a prior notice.</li>
								<li>RSVP to Community Manager OR Team 42.1 is mandatory for attending the workshops, events, and meet-ups.</li>
								<li>Team 42.1 reserves all the rights to hold/cancel any event or workshops with a prior notice.</li>
								<li>The Core committee is entitled to make changes (include/exclude) in the membership benefits without a prior notice.</li>
								<li>The Core committee can change or modify the timings of the Meal-a-Mile café without prior notice.</li>
								<li>By becoming the member of 42.1 Community, members are agreed to be contacted by the team 42.1 and their partners for any events, workshops, and promotions.</li>
								<li>Paying Membership Fee holds member accountable to above mentioned Terms & Conditions.</li>
						 </ul>
					 </div>
					 <div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					 </div>
			 </div>
	 </div>
</div>

<div class="modal fade" id="memberbenifit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	 <div class="modal-dialog">
			 <div class="modal-content">
					 <div class="modal-header" style="background-color: #f2f2f2;">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title modal-head-text"  id="myModalLabel">Membership Benefits</h4>
					 </div>
					 <div class="modal-body" style="text-align:justify;    margin-right: 30px;">
						 <ul>
								<li>Discounts on select ‘over-the-shelf’ food products, premium teas and coffees</li>
								<li>Discounts on highly curated apparels, running and fitness gears</li>
								<li>Discounts on workshops and meet-ups organized by our Mentors and Contributing Partners</li>
								<li>Option to Train under a Mentor (at nominal rates)</li>
								<li>Exclusive invitation to be part of Meal-a-Mile tasting sessions</li>
								<li>Access to Exclusive Menu, curated especially for fitness enthusiasts and athletes</li>
								<li>In person and online access to 42.1 Mentors and Contributing Partners </li>
								<li>Exclusive Online Forum to have direct access to Mentors, Contributing Partners and Members</li>
								<li>Curated content on latest updates, tips, tricks, how to do it yourself, where/what to shop etc.</li>
								<li>Two Mentors’ Pick Boxes per year (with curated nutrition products and gears) </li>
						 </ul>
					 </div>
					 <div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					 </div>
			 </div>
	 </div>
</div>

<!--<div class="top-header-about-text">
	<div class="container">
			<div class="col-md-12">
					<h3 class="text-uppercase">About 42.1</h3>
					<p class="mg-tp-20 huddle-btn">A niche community and space built for endurance sports enthusiasts like yourselves, 42.1 essentially comprises experts and amateurs, each pursuing some form of endurance sport.  </p>
					<a class="btnout  red mg-bt-30 text-uppercase" href="huddle.php">Read More</a>

			</div>
	</div>
</div>-->

<div class="top-header-text">
	<div class="container">
			<div class="col-md-12">
					<h3 class="text-uppercase">Huddle</h3>
					<p class="mg-tp-20 huddle-btn">Welcome to Huddle! Venture into the world of everything endurance sports with us. </p>
					<a class="btnout  red mg-bt-30 text-uppercase" href="huddle.php">Read More</a>

			</div>
	</div>
</div>

<div class="top-meal-text">
	<div class="container">
			<div class="col-md-6">&nbsp;</div>
			<div class="col-md-6 text-left">
					<h3 class="text-uppercase">MEAL A MILE</h3>
						<p class="meal_mile_header txt_just">Open on weekends only, for now, Meal-a-Mile serves food that is sensitive to the needs of endurance enthusiasts or anyone looking to make their day a bit healthier and a lot brighter. </p> <br />
						<a class="btnout meal-btn red mg-bt-30 text-uppercase" href="meal-a-mile.php">Read More</a>
				 </div>
			</div>
	</div>






	<div class="top-gearup-text">
		<div class="container">
				<div class="col-md-6 gear_text text-left">
					<h3 class="text-uppercase">Gear up</h3>
					<p class="txt_just">Gear Up is an exclusive range of curated gear designed for the 42.1 community members to help them find the right gear at the best price.</p><br />
					<a class="btnout red mg-bt-30 text-uppercase" href="gear-up.php">Read More</a>
				</div>
				</div>
		</div>

		<div class="top-whatsup-text">
			<div class="container">
					<div class="col-md-6">&nbsp;</div>
					<div class="col-md-6 text-left">
							<h3 class="text-uppercase txt_just">What's up?</h3>
		  			 		<p>Bookmark this page to search and register online </p>
								<p>for upcoming races and team sports events.</p> <br />
								<a class="btnout whatsup_btn red mg-bt-30 text-uppercase" href="whats-up.php">Read More</a>
		 				 </div>
					</div>
			</div>



			<div class="top-why42-text">
				<div class="container">
					  <div class="col-md-1">&nbsp;</div>
							<div class="col-md-10 text-center">
									<h3 class="text-uppercase">Adopt an Athlete</h3>
									<p style="margin-right: 4%;" >Adopt an Athlete is an iA Foundation initiative designed to give people access to the right resources to hone their skills in a sport of their choice. Sports like athletics, cricket, football, kabaddi, etc. are included in Adopt an Athlete program.42.1 looks to mentor budding athletes and help them train better by providing them with the right resources.</p>
									<br />
									<a class="btnout_wh danger mg-bt-30 mg-tp-10 text-uppercase" href="adopt.php">Read More</a>
							</div>
						<div class="col-md-1">&nbsp;</div>
						</div>
				</div>


<!--contaact start here-->
<div class="contact" id="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h3 class="text-uppercase">Membership Form</h3>
				<p>Become a member and get an exclusive access to the latest happenings in the world of endurance sports, wholesome foods and sports gear. To know more click on <a href="#" data-toggle="modal" data-target="#memberbenifit"> Member Benefits</a>.</p>
			</div>
		<form action="send.php" id="myForm" onsubmit="return formSubmit();" method="post">
		  <div class="contact-bottom">
			<div class="col-md-1">&nbsp;</div>
			<div class="col-md-5 contact-left">
				<input type="text" placeholder="First Name*"  name="fname" required="">
			</div>
			<div class="col-md-5 contact-left">
				<input type="text" placeholder="Last Name*"  name="lname" required="">
			</div>
			<div class="clearfix"> </div>
			<div class="col-md-1"></div>

			<div class="col-md-5 contact-left">
				<input type="email" placeholder="Email*"    name="email" required="">

				<input type="text" placeholder="Profession"   name="profession" >
			</div>

			<div class="col-md-5 contact-left">
				<input type="text" placeholder="Mobile Number*"   name="mobilenumber" required="">


				<!--<div class='input-group date' id='datetimepicker1'>
          <input type='text' class="form-control" name="bdate" />
          <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
              </span>
        </div> -->
				<input type="text" id="datepicker-12" placeholder="Date of Birth* (DD/MM/YYYY)"  name="age" required="">
			</div>

			<div class="clearfix"> </div>
			<div class="col-md-1"></div>

			<div class="col-md-4 contact-left" style="color:#FFF;">
			<label>Interests :</label>
			<!-- Default unchecked -->
			<div class="custom-control custom-checkbox">
			    <input type="checkbox" class="custom-control-input" id="running" name="running">
			    <label class="custom-control-label" for="running">Running</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" class="custom-control-input" id="longDist" name="longDist">
			    <label class="custom-control-label" for="longDist">Long Distance Running</label>
			</div>

			<!--<input type="text" name="other" placeholder="other"  />-->

			</div>
			<div class="col-md-3 contact-left show-inte">
				<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="cycling" name="cycling">
						<label class="custom-control-label" for="cycling">Cycling</label>
				</div>

				<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="swimming" name="swimming">
						<label class="custom-control-label" for="swimming">Swimming</label>
				</div>
			</div>
			<div class="col-md-3 contact-left show-inte">
				<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="triathlons" name="triathlons">
						<label class="custom-control-label" for="triathlons">Triathlons</label>
				</div>

				<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" onclick="checkStatus(this,'otherDetails')" id="other">
						<label class="custom-control-label" for="other">Others</label>
						<input type="text"  name="otherDetails" placeholder="Other Interests" id="otherDetails" >
				</div>
			</div>



			<div class="clearfix"> </div> <br />
			<div class="col-md-1"></div>

			<div class="col-md-4 contact-left show-inte">
				<label>Looking for Guidance on :</label>

				<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="training" name="training">
						<label class="custom-control-label" for="training">Training & Workouts</label>
				</div>

				<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="tech" name="tech">
						<label class="custom-control-label" for="tech">Tech & Gear</label>
				</div>
			</div>
			<div class="col-md-3 contact-left show-inte">
				<div class="custom-control custom-checkbox show-inte">
						<input type="checkbox" class="custom-control-input" id="nutrition" name="nutrition">
						<label class="custom-control-label" for="nutrition">Nutrition & Diet</label>
				</div>

				<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="injury" name="injury">
						<label class="custom-control-label" for="injury">Injury Prevention</label>
				</div>
			</div>
			<div class="col-md-3 contact-left show-inte">
				<div class="custom-control custom-checkbox show-inte">
						<input type="checkbox" class="custom-control-input" id="racing" name="racing">
						<label class="custom-control-label" for="racing">Racing</label>
				</div>

				<div class="custom-control custom-checkbox">
						<input type="checkbox"  onclick="checkStatus(this,'otherGuidance')"  class="custom-control-input" id="otherGuid" name="otherGuid">
						<label class="custom-control-label" for="otherGuid">Others</label>
						<input type="text" name="otherGuidance" id="otherGuidance" placeholder="other Guidance"  />
				</div>


			</div>


			<div class="clearfix"> </div> <br />
			<div class="col-md-1"></div>
			<div class="col-md-10 contact-right text-center" style="color:#FFF;">
				<div class="custom-control custom-checkbox">
						<input required type="checkbox" class="custom-control-input" id="terms">
						<label class="custom-control-label" for="terms">I agree to the
							<a href="#" data-toggle="modal" data-target="#termscondition" > Terms & Conditions </a></label>
				</div>
			</div>

			<div class="clearfix"> </div><br />
						<div class="col-md-2">&nbsp;</div>
						<div class="col-md-3 contact-left">
							<p  id="mainCaptcha" class="captch" />
						</div>
						<div class="col-md-2 contact-left setbtn">
							<input type="button" id="refresh" class="btnout white text-uppercase " value="Refresh" onclick="Captcha();" style="    margin-left: 15px;" />
						</div>
						<div class="col-md-3 contact-left">
			            <input type="text" id="txtInput"  placeholder="Enter captcha"  required />
						</div>

			<div class="col-md-12 contact-right text-center">
				<input type="submit" id="subscribeButton"   class="btnout white mg-tp-20 text-uppercase" value="Submit">
			</div>
		   </div>
		 </form>
		</div>
	</div>
</div>
<!--contact end here-->
<!--footer start here-->
		<?php include "include/footer.php" ?>
<!--footer end here-->

<script>
var slideIndex = 0;
//showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

$("#otherGuidance").hide();
$("#otherDetails").hide();


function checkStatus(status,show){
		if(status.checked){
			$("#"+show).show();
		}else{
			$("#"+show).hide();
		}
}

</script>

</html>
