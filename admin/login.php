<!DOCTYPE HTML>
<html>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
<head>
    <title>Login | 42.1</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.png"/>
    <link rel="stylesheet" href="css/login-form.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
    function checkRegistration(){
      var vname = $("#fname").val();
      var vemail = $("#email").val();
      var vmobile = $("#mobileNumber").val();
      var vradio = $("input[name=membership]:checked").val();
      var vcheckmeal;
      var vcheckrecovery;
        if($('#mealamile').prop("checked")){
            vcheckmeal = 'YES';
        }else{
            vcheckmeal = 'NO';
        }

        if($('#recovery').prop("checked")){
            vcheckrecovery = 'YES';
        }else{
            vcheckrecovery = 'NO';
        }

    $.post("manageRegistration.php",{ // Data Sending With Request To Server
      name:vname,
      email:vemail,
      mobile:vmobile,
      isMember:vradio,
      visitMealamile:vcheckmeal,
      visitRecovery:vcheckrecovery
    },
    function(response,status){
         alert("Success!");
         document.getElementById("myForm").reset();
    });
    }

function checkMember(mobileNumber){
  $.post("checkMember.php",{ // Data Sending With Request To Server
    mobileNumber:mobileNumber.value,
    },function(response,status){
      var res = response.split("@&@");
      $("#fname").val(res[0]);
      $("#email").val(res[1]);
    });
}

    </script>
</head>
<body>
  <form action="#" method="post" id="myForm">
    <div class="login-form-2">
       <div class="text-center">
            <img src="image/logo-dark-.png" alt="42point1-logo" class="logo-size">
       </div>
        <div class="form-group">
            <label for="name">Mobile Number</label>
            <input type="number" onchange="checkMember(this)" class="form-control margin-t" placeholder="Enter Mobile Number" id="mobileNumber" name="mobileNumber" maxlength="10" required />
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control margin-t" placeholder="Enter Name" id="fname" name="fname" maxlength="20" required />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control margin-t" placeholder="Enter Email" id="email" name="email">
        </div>

      <!--  <div class="form-group">
            <input type="radio" name="membership" id="isMember" value="YES">
            <label for="isMember">Member</label>
            <input type="radio" name="membership" id="isNonember" value="NO">
            <label for="isNonember">Non-Member</label>
        </div> -->
        <div class="form-group">
            <label for="number" style="margin: 3px 3px 0px 5px; color:#660000;"><b>Visit For:</b><br><br></label>

            <input type="checkbox" name="visit" id="mealamile" value="YES">
            <label for="mealamile">Meal-a-Mile</label>

            <input type="checkbox" name="visit" id="recovery" value="YES">
            <label for="recovery">Recovery Zone</label>
        </div>
        <button type="button" class="log-btn" onclick="return checkRegistration();">Submit</button>
    </div>
  </form>
</body>
</html>
