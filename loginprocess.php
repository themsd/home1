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
	
	$qry="SELECT * FROM needy_reg WHERE eid = '".$email."'" ;

	$result=mysql_query($qry,$con);
	if($row=mysql_fetch_array($result))
	{
		if($row['psw']==$password)
		{
			header("location:nloginnext.php");
			$_SESSION['email']=$row['eid'];
			$_SESSION['password']=$row['psw'];
		}
		else
		{
			header("location:login.php");
		}
	}
	else
	{
		header("location:login.php?error=Incorrect");
	}	
	
	mysql_close();

?>