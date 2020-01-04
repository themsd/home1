<?php

session_start();

$email = trim($_POST['email']);							/// trim is used to removes whitespace 
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
	
	$qry="SELECT * FROM admin_reg WHERE email = '".$email."'" ;

	$result=mysql_query($qry,$con);
	if($row=mysql_fetch_array($result))
	{
		if($row['password']==$password)
		{
			header("location:adminhome1.php");
			$_SESSION['email']=$row['email'];
			$_SESSION['password']=$row['password'];
		}
		else
		{
			header("location:adminlogin.php");
		}
	}
	else
	{
		header("location:adminlogin.php?error=Incorrect");
	}	
	
	//if(mysqli_query($con,$qry))
	//{
		//$num_row = mysqli_num_rows($qry);
		//if($num_row!=0)
		//{
		//	header("location:adminhome1.php");
		//}
		//else 
	//	{
		//	header("location:adminlogin.php");
		//}
	// echo "Data Inserted";
		//header("location:adminhome1.php");
	//}
	//else
	//{
		// echo "Data not Inserted";
		//header("location:adminlogin.php");
	//}
	
	
	mysql_close();

?>