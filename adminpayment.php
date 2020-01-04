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
				 </div>
			 </div>
		 </div>
 
		 <div class="top-menu">
			 <span class="menu">MENU</span>
			 <ul>
			 <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<!-- <li><a href="about.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>About</a></li>
			 <li><a href="reg.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Registration</a></li>
			 <li><a href="login.html"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Login</a></li> -->
			 <li class="active"><a href="adminpayment.php"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span>Donate</a></li>
			 <!-- <li><a href="gallery.html"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>Gallery</a></li>
			 <li><a href="contact.html"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a></li>  -->
			 <li><a href="logout.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>logout</a></li>
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
</div>

<head>
<title>Payment Form Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<div class="main">
		
		<div class="content">
			
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
					
<!---
--->
<form action="adminpayp.php" method="POST">
<div class="sap_tabs">
<div id="horizontalTab" style="display: block; width: 100%; height:100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label><br/>Credit Card</span></li>
										 
										  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label><br/>PayPal</span></li> 
										  <div class="clear"></div>
									  </ul>	
									  <br/>
									  <br/>
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											<h3>Personal Information</h3>
											
													<div class="tab-for">
													<h5>NEEDY EMAIL</h5>
														<h5><input type="text" value="" name="email"></h5>
														</br><?php if(isset($_REQUEST['emlerror'])){echo $_REQUEST['emlerror'];}?>
													</div>		
											
											<!-- <h3 class="pay-title">Credit Card Info</h3> -->
											
											<!--	<div class="tab-for">				
													<h5>NAME</h5>
														<input type="text" value="" name="dname">
														</br>/error'];}?> -->
	
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" name="cardnumber" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
														</br><?php if(isset($_REQUEST['carderror'])){echo $_REQUEST['carderror'];}?>	
												</div>
													</br>
													
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" name="date" class="text_box" type="text" value="01" min="1" />
	
																</li>
																<li>
																	<input type="number" name="year" type="text" value="2018" min="4" />		
																</li>
																
															</ul>
														
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="password" value="xxx" name="ccv" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxx';}" required="">
														  
													</div>
													<div class="clear">
													<br>
													<div><h5>Amount</h5><input type="number" name="amount"></div>
													</br><?php if(isset($_REQUEST['amterror'])){echo $_REQUEST['amterror'];}?> 	
													</div>
												</div>
											</div>
												
											
												<br/>
											<input name="submit" type="submit" value="Submit">

										
									</div>
								</form>	
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="payment-info">
											<h3>PayPal</h3>
											<center><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="hosted_button_id" value="UPV334B8KXR5C">
											<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
											<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
											</form></center>
										
										<div class="user-right">
											</div>
											<div class="clear"></div>
							</div>	
						</div>
									
									
			</div>
		</div>
	</div>
					
													
</div>	
</div>
</div>	
</div>
</div>	
		</div>
		<div class="copywrite">
		<div class="container">
			 <p> © 2017 Charity. All rights reserved | Design by <a href="http://w3layouts.com/">msdave</a></p>
		</div>
</div>
</div>
</body>
</html>