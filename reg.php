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
			<!-- <li><a href="about.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>About</a></li>-->
			 <li class="active"><a href="reg.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Registration</a></li>
		<!--	 <li><a href="login.html"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Login</a></li>-->
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

</br>

<!-- <td><center><a href="dreg.php"><h4>Donor Registration Page</a></center></td>
<td><center><a href="reg.php"><h4>Needy Registration Page</a></center></td>
<br/> -->



<center>
<form method="POST" action="regp.php">
<h4>Needy Registration</h4>
<br/>
<table cellspacing="10">

<tr>
<td style="padding-bottom:0.4em;">First name</td>
<td style="padding-bottom:0.4em;">
<input type="text" name="firstname">
</td>
<td style="padding-bottom:0.4em;"><?php if(isset($_REQUEST['fsterror'])){echo $_REQUEST['fsterror'];}?></td>
</tr>
<tr>
<td>
</td>
</tr>
	
<tr>
<td style="padding-bottom:0.4em;">Middle name</td>
<td style="padding-bottom:0.4em;">	
<input type="text" name="middlename">
</td>
<td style="padding-bottom:0.4em;"><?php if(isset($_REQUEST['miderror'])){echo $_REQUEST['miderror'];}?></td></tr>

<tr>
<td style="padding-bottom:0.4em;">Lastname</td>
<td style="padding-bottom:0.4em;">
<input type="text" name="lastname">
</td>
<td style="padding-bottom:0.4em;"><?php if(isset($_REQUEST['lsterror'])){echo $_REQUEST['lsterror'];}?></td></tr>

<tr>
<td style="padding-bottom:0.4em;">Password</td>
<td style="padding-bottom:0.4em;">
<input type="password" name="password">
</td>
<td style="padding-bottom:0.4em;"><?php if(isset($_REQUEST['passerror'])){echo $_REQUEST['passerror'];}?></td></tr>



<tr>
<td style="padding-bottom:0.4em;">Conform Password</td>
<td style="padding-bottom:0.4em;"><input type="password" name="cpassword"></td>
<td style="padding-bottom:0.4em;"><?php if(isset($_REQUEST['cpasserror'])){echo $_REQUEST['cpasserror'];}?></td>
</tr>

<tr>
<td style="padding-bottom:0.4em;">Email-id</td>
<td style="padding-bottom:0.4em;"><input type="text" name="email-id"></td>
<td style="padding-bottom:0.4em;"><?php if(isset($_REQUEST['emlerror'])){echo $_REQUEST['emlerror'];}?></td>
</tr>


<tr>
<td style="padding-bottom:0.4em;">phone_no</td>
<td style="padding-bottom:0.4em;"><input type="text" name="phoneno"></td>
<td style="padding-bottom:0.4em;"><?php if(isset($_REQUEST['moberror'])){echo $_REQUEST['moberror'];}?></td>
</tr>


<tr>
<td style="padding-bottom:0.4em;">Amount</td>
<td style="padding-bottom:0.4em;"><input type="text" name="amount"></td>
<td style="padding-bottom:0.4em;"><?php if(isset($_REQUEST['amounterror'])){echo $_REQUEST['amounterror'];}?></td>
</tr>

<tr>
<td style="padding-bottom:0.4em;">Card Number</td>
<td style="padding-bottom:0.4em;"><input type="text" name="cardnumber"></td>
<td style="padding-bottom:0.4em;"><?php if(isset($_REQUEST['carderror'])){echo $_REQUEST['carderror'];}?></td>
</tr>
 
<!-- <form enctype="multipart/form-data" method="POST" action="upload.php"> -->
<tr>
<td style="padding-bottom:0.4em;">Upload certificate of income &nbsp;&nbsp;&nbsp;</td>
<td style="padding-bottom:0.4em;"><input accept="doc/docx" name="upload" size="40" type="file"/></td>
<td style="padding-bottom:0.4em;"><?php if(isset($_REQUEST['uploaderror'])){echo $_REQUEST['uploaderror'];}?></td>
</tr>
<!--</form>-->

<tr>
<td style="padding-bottom:0.4em;">Description</td> 
<td style="padding-bottom:0.4em;"><textarea name="des" onfocus="this.value = '';" onblur="if (this.value == '')required=""></textarea></td>
<td style="padding-bottom:0.4em;"><?php if(isset($_REQUEST['deserror'])){echo $_REQUEST['deserror'];}?></td>
</tr>

<tr>
<td style="padding-bottom:0.4em;">Address</td> 
<td style="padding-bottom:0.4em;"><textarea name="add" onfocus="this.value = '';" onblur="if (this.value == '')required=""></textarea></td>
<td style="padding-bottom:0.4em;"><?php if(isset($_REQUEST['adderror'])){echo $_REQUEST['adderror'];}?></td>
</tr>

<tr>
<form action="login.html">
<td><center><input type="submit" name="submit" value="Register"> </center></td> 
</form>

<form action="reg.php">
<td><input type="submit" name="cancel" value=" Cancel "> </td>
</form>
</tr>
</table>

</center>


<br/>
<center><a href="login.php"><h4>If you already user go to login</a></center>
	
</body>
</html>