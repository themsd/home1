<html>
<head>
<?php 
session_start();

?>
<title> Online Charity System </title>
<!-- <div>Welcome <?php echo $_SESSION['email']; ?></div> -->
<!-- <form method="post" action="logout.php">
        <p>
          Welcome <?php echo $_SESSION['email']; ?>
		  
          <input name="search" class="button" type="submit" value="Logout" />
		  
		  
        </p>
</form>

-->
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



<frameset rows="29%,21%,44%,26%">
<frame  frameborder =0 src="header.php"/>
<frame  frameborder =0 src="totalpayment.php"/>
<frameset cols="50%,50%">
<frame  frameborder =0 src="donordetails.php"/>
<frame  frameborder =0 src="accpetneedy.php"/>
</frameset>
<frame  frameborder =0 src="needydetails.php"/>
</frameset>


</html>