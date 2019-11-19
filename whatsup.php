<!DOCTYPE HTML>
<html>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<title>What's Up? | 42.1</title>
		<link rel="shortcut icon" type="image/png" href="image/favicon.png"/>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<!-- Custom Theme files -->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<!-- Custom Theme files -->
		<!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />

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
        title: 'Performance Training Session #1',
        description: 'description for All Day Event',
				start: '2019-04-06',
				end: '2019-04-07',
				url: 'https://www.facebook.com/events/438021123633573/'
      },
      {
        title: 'Running workshop #1',
        description: 'description for Long Event',
				start: '2019-04-20',
				url: 'https://www.facebook.com/events/438021123633573/'
			},
			{
        title: 'Body & mind conditioning workshop #1',
        description: 'description for All Day Event',
				start: '2019-05-04',
				end: '2019-05-05',
				url: 'https://www.facebook.com/events/438021123633573/'
			},
			{
        title: 'Nutritional guidance session #1',
        description: 'description for All Day Event',
				start: '2019-05-18',
				end: '2019-05-19',
				url: 'https://www.facebook.com/events/438021123633573/'
			},
			{
        title: 'Performance Training Session #2',
        description: 'description for All Day Event',
				start: '2019-06-01',
				end: '2019-06-02',
				url: 'https://www.facebook.com/events/438021123633573/'
      },
      {
        title: 'Running workshop #2',
        description: 'description for Long Event',
				start: '2019-06-15',
				end: '2019-06-16',
				url: 'https://www.facebook.com/events/438021123633573/'
			},
			{
        title: 'Body & mind conditioning workshop #2',
        description: 'description for All Day Event',
				start: '2019-06-29',
				end: '2019-06-30',
				url: 'https://www.facebook.com/events/438021123633573/'
			},
			{
        title: 'Nutritional guidance session #2',
        description: 'description for All Day Event',
				start: '2019-07-06',
				end: '2019-07-07',
				url: 'https://www.facebook.com/events/438021123633573/'
			},
			{
        title: 'Performance Training Session #3',
        description: 'description for All Day Event',
				start: '2019-07-20',
				end: '2019-07-21',
				url: 'https://www.facebook.com/events/438021123633573/'
			},
			{
        title: 'Running workshop #3',
        description: 'description for Long Event',
				start: '2019-08-03',
				end: '2019-08-04',
				url: 'https://www.facebook.com/events/438021123633573/'
			},
			{
        title: 'Body & mind conditioning workshop #3',
        description: 'description for All Day Event',
				start: '2019-08-17',
				end: '2019-08-18',
				url: 'https://www.facebook.com/events/438021123633573/'
			},
			{
        title: 'Nutritional guidance session #3',
        description: 'description for All Day Event',
				start: '2019-08-31',
				end: '2019-09-01',
				url: 'https://www.facebook.com/events/438021123633573/'
			},
			{
        title: 'Running workshop #4',
        description: 'description for Long Event',
				start: '2019-09-14',
				end: '2019-09-15',
				url: 'https://www.facebook.com/events/438021123633573/'
			},
			{
        title: 'Body & mind conditioning workshop #4',
        description: 'description for All Day Event',
				start: '2019-09-28',
				end: '2019-09-29',
				url: 'https://www.facebook.com/events/438021123633573/'
			},
			{
        title: 'Nutritional guidance session #4',
        description: 'description for All Day Event',
				start: '2019-10-05',
				end: '2019-10-06',
				url: 'https://www.facebook.com/events/438021123633573/'
			}
		],
		eventClick: function(info) {
    info.jsEvent.preventDefault(); // don't let the browser navigate

    if (info.event.url) {
      window.open(info.event.url);
    }
  }
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
							<h5 style="margin-bottom:3px;">SAT</h5>
							<h2><b>06</b></h2>
							<h5><b>APR</b></h5>
						</div>
						<div class="col-md-9" style="background:#fff; color:#4e4e4e;height:81px;padding:7px 10px;">
							<h4>Performance Training Session #1</h4>
						</div>
					</div>
					<div class="col-md-12" style="border-top:3px solid #ffc20d; padding:0px; margin-top:1rem;">
						<div class="col-md-3 text-center" style="background:#005DAA; color:white; padding:7px 0;">
							<h5 style="margin-bottom:3px;">SAT</h5>
							<h2><b>20</b></h2>
							<h5><b>APR</b></h5>
						</div>
						<div class="col-md-9" style="background:#fff; color:#4e4e4e;height:81px;padding:7px 10px;">
							<h4>Running workshop #1</h4>
						</div>
					</div>
					<div class="col-md-12" style="border-top:3px solid #ffc20d; padding:0px; margin-top:1rem;">
						<div class="col-md-3 text-center" style="background:#005DAA; color:white; padding:7px 0;">
							<h5 style="margin-bottom:3px;">SAT</h5>
							<h2><b>04</b></h2>
							<h5><b>MAY</b></h5>
						</div>
						<div class="col-md-9" style="background:#fff; color:#4e4e4e;height:81px;padding:7px 10px;">
							<h4>Body & mind conditioning workshop #1</h4>
						</div>
					</div>
					<div class="col-md-12" style="border-top:3px solid #ffc20d; padding:0px; margin-top:1rem;">
						<div class="col-md-3 text-center" style="background:#005DAA; color:white; padding:7px 0;">
							<h5 style="margin-bottom:3px;">SAT</h5>
							<h2><b>18</b></h2>
							<h5><b>MAY</b></h5>
						</div>
						<div class="col-md-9" style="background:#fff; color:#4e4e4e;height:81px;padding:7px 10px;">
							<h4>Nutritional guidance session #1</h4>
						</div>
					</div>
					<div class="col-md-12" style="border-top:3px solid #ffc20d; padding:0px; margin-top:1rem;">
						<div class="col-md-3 text-center" style="background:#005DAA; color:white; padding:7px 0;">
							<h5 style="margin-bottom:3px;">SAT</h5>
							<h2><b>01</b></h2>
							<h5><b>JUN</b></h5>
						</div>
						<div class="col-md-9" style="background:#fff; color:#4e4e4e;height:81px;padding:7px 10px;">
							<h4>Performance Training Session #2</h4>
						</div>
					</div>
					<div class="col-md-12" style="border-top:3px solid #ffc20d; padding:0px; margin-top:1rem;">
						<div class="col-md-3 text-center" style="background:#005DAA; color:white; padding:7px 0;">
							<h5 style="margin-bottom:3px;">SAT</h5>
							<h2><b>15</b></h2>
							<h5><b>JUN</b></h5>
						</div>
						<div class="col-md-9" style="background:#fff; color:#4e4e4e;height:81px;padding:7px 10px;">
							<h4>Running workshop #2</h4>
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
