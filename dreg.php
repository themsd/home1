<!--
Author: Madhav
Author URL: http://@charity.com
License: Creative Commons Attribution 4.0 Unported
License URL: http://creativecommons.org/licenses/by/4.0/
-->

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
<div class="header">
	 <div class="container">
		 <div class="header-top">
			 <div class="logo">
				 <a href="index.html"><h1>Online Charity<span>Organization</span></h1></a>
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
				 <div class="clearfix"></div>
			 </div>
		 </div>
	 </div>
		 <div class="top-menu">
			 <span class="menu">MENU</span>
			 <ul>
			 <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<!-- <li><a href="about.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>About</a></li> -->
			 <li class="active"><a href="dreg.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Registration</a></li>
			 <!-- <li><a href="login.html"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Login</a></li> -->
			 <!-- <li><a href="payment.html"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span>Donate</a></li> -->
			 <li><a href="gallery.html"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>Gallery</a></li>
			 <li><a href="contact.html"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a></li>
			<!-- <li><a href="logout.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>logout</a></li> -->
			 </ul>
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

</body>
<br/><br/><br/>

<body>		<!--background="background.jpg" height="auto"-->

<center>
<form method="POST" action="dregp.php">

<!-- <tr><td><center><a href="dreg.php"><h4>Donor Registration Page</a></center></td>
<td><center><a href="reg.php"><h4>Needy Registration Page</a></center></td></tr>
<br/> -->

<h4>Donor Registration</h4>
</br>

<tr>
<td>Name</td>
<td><h4><input type="text" name="name"></td></h4>
<td><?php if(isset($_REQUEST['nameerror'])){echo $_REQUEST['nameerror'];}?></td>
</tr><br/>


<tr>
<td>Email-id</td>
<td><h4><input type="text" name="email"></td></h4>
<td><?php if(isset($_REQUEST['emlerror'])){echo $_REQUEST['emlerror'];}?></td>
</tr><br/>

<tr><td>Password</td>
<td><h4><input type="password" name="password"></h4></td>
<td><?php if(isset($_REQUEST['passerror'])){echo $_REQUEST['passerror'];}?></td></tr><br/>

<tr>
<td>phone_no</td>
<td><h4><input type="text" name="phone"></h4></td>
<td><?php if(isset($_REQUEST['moberror'])){echo $_REQUEST['moberror'];}?></td>
</tr><br/>

<tr>
<td colspan="2" align="center">
</tr>

</table>
</center>

<br/>
<center><form action="login.html">
<input type="submit" name="submit" value="Register"> 
</form></center>
<br/>

<center><form action="dreg.php">
<input type="submit" name="cancel" value=" Cancel "> 
</form></center>
<br/>
<center><a href="donorlogin.php"><h4>If you already user go to login</a></center>

</form>
</body>
</html>