<?php
	/*$server_name = "http://localhost:8080/42.1_prod/";*/
	/*$server_name = "http://192.168.1.172:8080/42.1_prod/";*/
	$server_name = "http://www.42point1.com/";
	/*$server_name = "<?php echo $server_name ?>";*/
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140666772-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'UA-140666772-1');
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KM4X7LN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div class="navbar navg-strip" id="myHeader">
    <div class="container" >
      <div class="navg-main">
		 <div class="top-nav top-bar" >
		 	 <span class="menu"> <img src="images/icon.png" alt=""/></span>
			<ul class="res">
			  <li><a href="<?php echo $server_name ?>" class="active"><img src="image/logo-dark.png" style="height: 40px;"> </a></li>
			</ul>
			<!--script-->
						<script>
							$("span.menu").click(function(){
								$("ul.res").slideToggle(500, function(){
								});
							});
					</script>
		 </div>

			 <div class="top-nav social-icons text-right" style="padding: 10px;" >
				 <ul class="res nav-fix" style="float:left;margin-top: 1px;">
				 	<li class="top-bar-link-margin"><a class="top-bar-link" href="<?php echo $server_name ?>#contact">BECOME A MEMBER</a></li> 
	 			  <li class="top-bar-link-margin"><a class="top-bar-link" href="<?php echo $server_name ?>huddle.php">HUDDLE</a></li>
          <li class="top-bar-link-margin"><a class="top-bar-link" href="<?php echo $server_name ?>meal-a-mile.php">MEAL-A-MILE</a></li>
	 				<li class="top-bar-link-margin"><a class="top-bar-link" href="<?php echo $server_name ?>gear-up.php" >GEAR-UP</a></li>
          <!--<li class="top-bar-link-margin"><a class="top-bar-link" href="<?php echo $server_name ?>whats-up.php">WHAT'S UP?<sup><i class="fa fa-star" title="new update"></i></sup></a></li><span class="badge" style="margin-bottom:10px;">New</span>-->
					<li class="dropdown-title1 top-bar-link-margin"><a class="top-bar-link">PROGRAMS</a>
						<ul>
							<li><a class="top-bar-link" href="<?php echo $server_name ?>let's-plog-ahmedabad.php">LET'S PLOG-AHMEDABAD</a></li>
							<li><a class="top-bar-link" href="<?php echo $server_name ?>building-endurance.php">BUILDING ENDURANCE</a></li>
						</ul>
					</li>
          <li class="dropdown-title2 top-bar-link-margin"><a class="top-bar-link">ABOUT 42.1</a> 
						<ul>
							<li><a class="top-bar-link" href="<?php echo $server_name ?>about-us.php">ABOUT US</a></li>
							<li><a class="top-bar-link" href="<?php echo $server_name ?>join-our-team.php">JOIN OUR TEAM</a></li>
							<li><a class="top-bar-link" href="<?php echo $server_name ?>contact-us.php">CONTACT US</a></li>
						</ul>
						<!--<a href="<?php echo $server_name ?>about-us.php" >ABOUT US</a>-->
					</li>
				</ul>
				<ul class="social-icons-float">
					<li class="top-bar-link-margin1 social-margin-li1-md"><a href="https://www.instagram.com/42point1" target="_blank" class="fa fa-instagram social1 clred social-margin-a-md"></a></li>
					<li class="top-bar-link-margin1 social-margin-li2-md"><a href="https://www.facebook.com/42point1/" target="_blank" class="fa fa-facebook social1 clred social-margin-a-md"></a></li>
					<li class="top-bar-link-margin1 social-margin-li3-md"><a href="https://twitter.com/Community42pt1"  target="_blank" class="fa fa-twitter social1 clred social-margin-a-md"></a></li>
	 			</ul>
			 </div>

		  <div class="clearfix"> </div>

   </div>
  </div>
</div>
<!--header end here-->
