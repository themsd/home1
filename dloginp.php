<?php
session_start();
$email = trim($_POST['email']);
$password = trim($_POST['password']);

	$con=mysql_connect("localhost","root","");
	if($con)
	{
		echo "Connection Successfully";
	}
	else
	{
		die(mysql_error());
	}
	mysql_select_db("mycharity");
	
	$qry="SELECT * FROM donor_reg WHERE email = '".$email."'" ;

	$result=mysql_query($qry,$con);
	if($row=mysql_fetch_array($result))
	{
		if($row['password']==$password)
		{
			header("location:payment.html");
			$_SESSION['email']=$row['email'];
			$_SESSION['password']=$row['password'];
		}
		else
		{
			header("location:donorlogin.php");
		}
	}
	else
	{
		header("location:donorlogin.php?error=Incorrect");
	}	

	mysql_close();

?>