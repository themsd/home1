<!--
Author: Madhav and Niket
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
		
				<li><a href="logout.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>logout</a></li>
			 
			 </ul> 
	</div>
</div>


<div>


	   <?php
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("mycharity");

			$result=mysql_query("select dname,email,cardnumber,amount from d_payment");
		?>
	  
				<h1> Donor Details </h1>
				<table border="1">
				<tr><td>Donor name</td><td>Donor Email</td><td>Donor Card</td><td>Amount</td></tr>
	
     	
		<?php
			while($row=mysql_fetch_array($result))
			{
				?>
				<tr>
				<td><?php echo $row['dname'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['cardnumber'];?></td>
				<td><?php echo $row['amount'];?></td>
				</tr>
				<?php
			}
				?>
		</table>
</div>
<br/>
<br/>
<br/>

<!-- needy details -->

<div>
 <?php
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("mycharity");

			$result=mysql_query("select fname,mname,lname,eid,phno,amount,cardnumber,descrip,address from needy_reg");
		?>
	  
				<h1> Needy Details </h1>
				<table border="1">
				<tr><td>Needy name</td><td>Father name</td><td>Surname</td><td>Email</td><td>Phone</td><td>Amount</td><td>Card Number</td><td>Desciption</td><td>Address</td><td>Accpet Request</td><td>Cancel Request</td></tr>
	
     	
		<?php
			while($row=mysql_fetch_array($result))
			{
				?>
				<tr>
				<td><?php echo $row['fname'];?></td>
				<td><?php echo $row['mname'];?></td>
				<td><?php echo $row['lname'];?></td>
				<td><?php echo $row['eid'];?></td>
				<td><?php echo $row['phno'];?></td>
				<td><?php echo $row['amount'];?></td>
				<td><?php echo $row['cardnumber'];?></td>
				<td><?php echo $row['descrip'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><a href="adminpayment.php">Accpet</a></td>
				<td><a href="message.php">Cancel</a></td>
				</tr>
				<?php
			}
				?>
		</table>
		
<!-- accpeted needy payment -->
<br>
<br>

<div>
 <?php
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("mycharity");

			$result=mysql_query("select needyemail,cardnumber,amount from admin_payment");
		?>
	  
				<h1> Accpeted Needy Payment Details </h1>
				<table border="1">
				<tr><td>Needy Email</td><td>Card number</td><td>Amount</td></tr>
	
     	
		<?php
			while($row=mysql_fetch_array($result))
			{
				?>
				<tr>
				<td><?php echo $row['needyemail'];?></td>
				<td><?php echo $row['cardnumber'];?></td>
				<td><?php echo $row['amount'];?></td>
				</tr>
				<?php
			}
				?>
</table>
		
<!-- show total payment  -->

<div>
 <?php
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("mycharity");

			$result=mysql_query("select acc_no,balance from admin_account");
		?>
	  
				<h1> Total Balance </h1>
				<table border="1">
				<tr><td>Account No</td><td>Balance</td></tr>
	
     	
		<?php
			while($row=mysql_fetch_array($result))
			{
				?>
				<tr>
				<td><?php echo $row['acc_no'];?></td>
				<td><?php echo $row['balance'];?></td>
				</tr>
				<?php
			}
				?>
</table>
		


<!-- -->


</div>
		
<!--
<div class="copywrite">
	 <div class="container">
			 <p> © 2017 Charity. All rights reserved | Design by <a href="http://w3layouts.com/">msdave</a></p>
	 </div>
</div> -->
</html>