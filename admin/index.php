<!DOCTYPE HTML>
<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = $_POST['username'];
      $mypassword = $_POST['password'];
      $sql = "select * from login where username='".$myusername."' and password='".$mypassword."'";

      $result = mysqli_query($conn,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Admin | 42.1</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.png"/>
		<meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/login-form.css">
</head>
<body>
		<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
	    <div class="login-form">
	        <h1><img src="image/logo-dark-.png" alt=""></h1>
	        <div class="form-group ">
	        <input type="text" class="form-control" name="username" placeholder="Username " id="username">
	        <i class="fa fa-user"></i>
	        </div>
	        <div class="form-group log-status">
	        <input type="password" class="form-control" name="password" placeholder="Password" id="password">
	        <i class="fa fa-lock"></i>
	        </div>
	        <span class="alert">Invalid Credentials</span>
	        <button type="submit" class="log-btn" >Log in</button>
	    </div>
	</form>
</body>
</html>
