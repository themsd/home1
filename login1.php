	<!--
Author: Madhav and Niket
Author URL: http://@charity.com
License: Creative Commons Attribution 4.0 Unported
License URL: http://creativecommons.org/licenses/by/4.0/
-->
<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Online Charity System </title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Charity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<?php
// Set session variables
$_SESSION["id"] = email;
?>


<!---->
<div class="header">
	 <div class="container">
		 <div class="header-top">
			 <div class="logo">
				 <a href="index.html"><h1>Online Charity <span>Organization</span></h1></a>
			 </div>
			 <div class="hdr-address">
				 <div class="address1">
					 <h5> Ramkirshna tower, MN charity center</h5>
					 <p>Karamsad,Gujarat</p>
				 </div>
				 <div class="call">
					 <h5>+91 76986 72803</h5>
					 <p>Call me</p>
				 </div>
				</div>
			</div>
			
		 </div>
		 <div class="top-menu">
			 <span class="menu">MENU</span>
			 <ul>
			 <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			 <li><a href="about.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>About</a></li>
			<!-- <li><a href="reg.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Registration</a></li>-->
			 <li  class="active"><a href="login.html"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Login</a></li>
			<!-- <li><a href="payment.html"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span>Donate</a></li> -->
			 <li><a href="gallery.html"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>Gallery</a></li>
			 <li><a href="contact.html"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a></li>
			<!-- <li><a href="logout.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>logout</a></li> -->
			 </ul>
			 
		<!--	  <div id="searchform">
				<form method="post" class="search" action="logout.php">
				<p>
					Welcome <?php echo $_SESSION['name']; ?>
		  
					<input name="search" class="button" type="submit" value="Logout" />
		         </p>
      </form>
    </div> -->
	
	
		 </div>
		 	 
		 <!-- script-for-menu -->
		 <script>					
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle("slow" , function(){
						});
					});
		 </script>
		 <!-- script-for-menu -->	
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<center>
		<!--===============================================================================================-->	
			<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>	
		<!--===============================================================================================-->
			<!-- <link rel="stylesheet" type="text/css" href="css/util.css"> -->
			<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--===============================================================================================-->
					<br/>
					<br/>
					<br/>
					<form class="login100-form validate-form" action="nloginnext.php" method="POST">
					
									
					<span class="login100-form-title">
						Needy Login
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid username is required">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<br/>
					
					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="forgotpass.html">
						Email/Password?
						</a>
					</div>
					<br/>
					
					<div class="text-center p-t-50">
						<a class="txt2" href="reg.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			
<!--===============================================================================================-->	
				<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
			<!--===============================================================================================-->
				<script src="vendor/bootstrap/js/popper.js"></script>
				<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
			<!--===============================================================================================-->
				<script src="vendor/select2/select2.min.js"></script>
			<!--===============================================================================================-->
				<script src="vendor/tilt/tilt.jquery.min.js"></script>
					<script >
					$('.js-tilt').tilt({
					scale: 1.1
				})
				</script>
			<!--===============================================================================================-->
				<script src="js/main.js"></script>
</center>

<!---->
<br/>
<br/>	
<br/>
<br/>
<br/>
<div class="copywrite">
	 <div class="container">
			 <p> © 2017 Charity. All rights reserved | Design by <a href="http://w3layouts.com/">msdave</a></p>
	 </div>
</div>
<!---->
</body>
</html>