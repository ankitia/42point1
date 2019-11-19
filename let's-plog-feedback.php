<!DOCTYPE HTML>
<html>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<title>Let's Plog-Feedback | 42.1</title>
		<link rel="shortcut icon" type="image/png" href="image/favicon.png"/>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/endurance.css" rel="stylesheet" type="text/css" media="all">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<!-- Custom Theme files -->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- //end-smoth-scrolling -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>



<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KM4X7LN');</script>
<!-- End Google Tag Manager -->

<script type="application/ld+json">
{
	"@context": "http://schema.org",

	"@type": "BlogPosting",

	"headline": "Headline of Blog",

	"image": {

		"@type": "ImageObject",

	"url": "URL of any one image in case of multiple images",

	"width of that image": ,

	"height of that image":
  }
}

</script>

<script>
    function checkRegistration()
    {
        var plogID = $("#plogger-id").val();
        var enjoyEvent = $("#enjoy-event").val();
        var doneBetter = $("#done-better").val();
        var nextPlog = $("input[name=nextPlog]:checked").val();
        var recommendPlog = $("input[name=recommend]:checked").val();

        console.log(plogID);

        if(plogID == '' || enjoyEvent == '' || doneBetter == '')
        {
            if(plogID == '')
            {   
                document.getElementById("myModalLabel").innerHTML = "Required";
                document.getElementById("modalBody").innerHTML = "please enter plog ID";
                $("#thankyou").modal("toggle");
                document.getElementById("plogger-id").focus();

            }
            else
            {
                if(enjoyEvent == '')
                {
                    document.getElementById("myModalLabel").innerHTML = "Required";
                    document.getElementById("modalBody").innerHTML = "please enter what did you enjoy the most";
                    document.getElementById("enjoy-event").focus();
                    $("#thankyou").modal("toggle");
                    
                }
                else
                {
                    document.getElementById("myModalLabel").innerHTML = "Required";
                    document.getElementById("modalBody").innerHTML = "please enter which thing according to you we could have done better";
                    document.getElementById("done-better").focus();
                    $("#thankyou").modal("toggle");
                }
            }
        }
        else
        {
            $.post("letsPlogFeedbackForm.php",{ // Data Sending With Request To Server
            plogid:plogID,
            nextplog:nextPlog,
            recommendplog:recommendPlog,
            enjoyevent:enjoyEvent,
            donebetter:doneBetter
            },
            function(response,status){
                document.getElementById("feedback").reset();
                document.getElementById("myModalLabel").innerHTML = "Let's Plog - Feedback";
                document.getElementById("modalBody").innerHTML = "Thank you for your valuable time. Your feedback will help us discover new opportunities to improve your experience at the upcoming drives of Let’s Plog, Ahmedabad.";
                $("#thankyou").modal("toggle");
            });
        }
        
        
         
    }
</script>

</head>
<body>

<body>

		<?php include "include/header.php" ?>

<!--banner start here-->
<div class="lets-plog-bannerin">
	<div class="container">
		<div class="banner-inner">
		</div>
	</div>
</div>
<!--banner end here-->
<div class="single-building-endurance">
	<div class="container">
		<div class="col-md-12"> 
			<div class="single-grid-endurance">
                <form enctype="multipart/form-data" id="feedback">
                    <div class="form-group col-md-12">
                        <p class="txt-clr text-center mg-tp-20" style="font-size:30px;"><strong>FEEDBACK FORM</strong></p>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputAddress">Plogger ID</label>
                            <div class="input-box">
                                <input type="text" class="form-control" id="plogger-id" name="plogger-id" style="padding-left:46px;" maxlength="3" minlength="3" required>
                                <span class="unit">LP - </span>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">On a scale of 0 to 10 how likely are you to join the next Let’s Plog - Ahmedabad drive?</label>
                            <br>
                            <br>
                            <div class="col-md-1">
                                <input type="radio" name="nextPlog" id="next0" value="0">
                                <label for="next0">0</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="nextPlog" id="next1" value="1">
                                <label for="next1">1</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="nextPlog" id="next2" value="2">
                                <label for="next2">2</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="nextPlog" id="next3" value="3">
                                <label for="next3">3</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="nextPlog" id="next4" value="4">
                                <label for="next4">4</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="nextPlog" id="next5" value="5">
                                <label for="next5">5</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="nextPlog" id="next6" value="6">
                                <label for="next6">6</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="nextPlog" id="next7" value="7">
                                <label for="next7">7</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="nextPlog" id="next8" value="8">
                                <label for="next8">8</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="nextPlog" id="next9" value="9">
                                <label for="next9">9</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="nextPlog" id="next10" value="10">
                                <label for="next10">10</label>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPhone">On a scale of 0 to 10 how likely are you to recommend a friend or family member to join the next Let’s Plog - Ahmedabad drive?</label>
                            <br>
                            <br>
                            <div class="col-md-1">
                                <input type="radio" name="recommend" id="rec0" value="0">
                                <label for="rec0">0</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="recommend" id="rec1" value="1">
                                <label for="rec1">1</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="recommend" id="rec2" value="2">
                                <label for="rec2">2</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="recommend" id="rec3" value="3">
                                <label for="rec3">3</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="recommend" id="rec4" value="4">
                                <label for="rec4">4</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="recommend" id="rec5" value="5">
                                <label for="rec5">5</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="recommend" id="rec6" value="6">
                                <label for="rec6">6</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="recommend" id="rec7" value="7">
                                <label for="rec7">7</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="recommend" id="rec8" value="8">
                                <label for="rec8">8</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="recommend" id="rec9" value="9">
                                <label for="rec9">9</label>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" name="recommend" id="rec10" value="10">
                                <label for="rec10">10</label>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPhone">What did you like/enjoy the most at the event on May 26, 2019?</label>
                            <input type="text" class="form-control" id="enjoy-event" maxlength="100" name="enjoy-event" required>
                            <label for="inputPhone" style="color:red; font-size:10px;">*Max 100 Characters</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPhone">In your opinion, what is the one thing we could have done better?</label>
                            <input type="text" class="form-control" id="done-better" maxlength="100" name="done-better" required>
                            <label for="inputPhone" style="color:red; font-size:10px;">*Max 100 Characters</label>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="button" class="btn btn-primary" onclick="return checkRegistration();">Submit</button>
                        </div>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>

<!-- model -->
<div class="modal fade" id="thankyou" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	 <div class="modal-dialog">
			 <div class="modal-content">
                    <div class="modal-header" style="background-color: #f2f2f2;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title modal-head-text"  id="myModalLabel">Let's Plog - Feedback</h4>
					 </div>
					 <div class="modal-body" id="modalBody" style="text-align:justify; margin-right: 30px;">
                        
					 </div>
					 <div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					 </div>
			 </div>
	 </div>
</div>

<!--footer start here-->
<div class="ngt-margin-bv">
	<?php include "include/footer.php" ?>
</div>
</body>
</html>
