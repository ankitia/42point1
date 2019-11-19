<!DOCTYPE HTML>
<html>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<title>What's Up? | 42.1</title>
		
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		
		<script src="js/jquery-1.11.0.min.js"></script>
		<!-- Custom Theme files -->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<!-- Custom Theme files -->
		<!-- Custom Theme files -->
		

		<!-- Calendar files-->
		<link rel='stylesheet' href='css/core/main.css'/>
		<link rel='stylesheet' href='css/daygrid/main.css'/>
		<script src='js/core/main.js'></script>
		<script src='js/daygrid/main.js'></script>
    <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
		<script src="https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js"></script>
    <script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'dayGrid' ],
    defaultView: 'dayGridMonth',
    defaultDate: '2019-03-12',

    eventRender: function(info) {
      var tooltip = new Tooltip(info.el, {
        title: info.event.extendedProps.description,
        placement: 'top',
        trigger: 'hover',
        container: 'body'
      });
    },

    events: [
      {
        title: 'All Day Event',
        description: 'description for All Day Event',
        start: '2019-03-01'
      },
      {
        title: 'Long Event',
        description: 'description for Long Event',
        start: '2019-03-07',
        end: '2019-03-10'
      },
      {
        groupId: '999',
        title: 'Repeating Event',
        description: 'description for Repeating Event',
        start: '2019-03-09T16:00:00'
      },
      {
        groupId: '999',
        title: 'Repeating Event',
        description: 'description for Repeating Event',
        start: '2019-03-16T16:00:00'
      },
      {
        title: 'Conference',
        description: 'description for Conference',
        start: '2019-03-11',
        end: '2019-03-13'
      },
      {
        title: 'Meeting',
        description: 'description for Meeting',
        start: '2019-03-12T10:30:00',
        end: '2019-03-12T12:30:00'
      },
      {
        title: 'Lunch',
        description: 'description for Lunch',
        start: '2019-03-12T12:00:00'
      },
      {
        title: 'Meeting',
        description: 'description for Meeting',
        start: '2019-03-12T14:30:00'
      },
      {
        title: 'Birthday Party',
        description: 'description for Birthday Party',
        start: '2019-03-13T07:00:00'
      },
      {
        title: 'Click for Google',
        description: 'description for Click for Google',
        url: 'http://google.com/',
        start: '2019-03-28'
      }
    ]
  });

  calendar.render();
});

</script>
		<!-- Calendar files ends-->

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

</head>
<body>

<body>

		<?php include "include/header.php" ?>

<!--banner start here-->
<div class="bannerin">
	<div class="container">
		<div class="banner-inner">
			<h2>What's Up</h2>
		</div>
	</div>
</div>
<!--banner end here-->

<!--single start here-->
		 <div class="single">
			<div class="container">
				<div class="col-md-3" style="margin-right:60px; background:#e9e8e7; padding:1rem;">
					<div class="col-md-12" style="padding:1rem 0;">
						<h4 style="color:#005DAA;">EVENT LIST</h4>
						<span class="head-line"></span>
					</div>
					<div class="col-md-12" style="border-top:3px solid #ffc20d; padding:0px; margin-top:1rem;">
						<div class="col-md-3 text-center" style="background:#005DAA; color:white; padding:7px 0;">
							<h5 style="margin-bottom:3px;">FRI</h5>
							<h2><b>01</b></h2>
							<h5><b>APR</b></h5>
						</div>
						<div class="col-md-9" style="background:#fff; color:#4e4e4e;height:81px;padding:7px 10px;">
							<h4>All day event</h4>
						</div>
					</div>
					<div class="col-md-12" style="border-top:3px solid #ffc20d; padding:0px; margin-top:1rem;">
						<div class="col-md-3 text-center" style="background:#005DAA; color:white; padding:7px 0;">
							<h5 style="margin-bottom:3px;">THU</h5>
							<h2><b>07</b></h2>
							<h5><b>APR</b></h5>
						</div>
						<div class="col-md-9" style="background:#fff; color:#4e4e4e;height:81px;padding:7px 10px;">
							<h4>Long Event</h4>
						</div>
					</div>
					<div class="col-md-12" style="border-top:3px solid #ffc20d; padding:0px; margin-top:1rem;">
						<div class="col-md-3 text-center" style="background:#005DAA; color:white; padding:7px 0;">
							<h5 style="margin-bottom:3px;">TUE</h5>
							<h2><b>12</b></h2>
							<h5><b>APR</b></h5>
						</div>
						<div class="col-md-9" style="background:#fff; color:#4e4e4e;height:81px;padding:7px 10px;">
							<h4>Dinner</h4>
						</div>
					</div>
					<div class="col-md-12" style="border-top:3px solid #ffc20d; padding:0px; margin-top:1rem;">
						<div class="col-md-3 text-center" style="background:#005DAA; color:white; padding:7px 0;">
							<h5 style="margin-bottom:3px;">WED</h5>
							<h2><b>13</b></h2>
							<h5><b>APR</b></h5>
						</div>
						<div class="col-md-9" style="background:#fff; color:#4e4e4e;height:81px;padding:7px 10px;">
							<h4>Birthday Party</h4>
						</div>
					</div>
					<div class="col-md-12" style="border-top:3px solid #ffc20d; padding:0px; margin-top:1rem;">
						<div class="col-md-3 text-center" style="background:#005DAA; color:white; padding:7px 0;">
							<h5 style="margin-bottom:3px;">FRI</h5>
							<h2><b>15</b></h2>
							<h5><b>APR</b></h5>
						</div>
						<div class="col-md-9" style="background:#fff; color:#4e4e4e;height:81px;padding:7px 10px;">
							<h4>Click for google</h4>
						</div>
					</div>
					
				</div>
				<div class="col-md-8" style="margin-bottom:2rem; background:#e9e8e7; padding:2rem;">
					<div id='calendar'></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

<!--//single end here-->
<!--footer start here-->
<div class="ngt-margin-whatsup">
		<?php include "include/footer.php" ?>
</div>		
<!--footer end here-->
</html>
