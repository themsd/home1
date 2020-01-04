<?php
 
$name=$_POST['name']; 
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];

$flag=1;

//validation

//name
if(empty($name))
	{
		$nameerror="You Forgot to enter name";
		$flag=0;	
	}


//email
if(empty($email))
	{
		$emlerror="You Forgot to enter Email";
		$flag=0;	
	}
	elseif(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
	{
			$emlerror="You entered invalid email";
			$flag=0;
	}
	 
//password 
	if(empty($password))
	{
		$passerror="You Forgot to enter password";
		$flag=0;
	}
	elseif(strlen($password)<8)
	{
		$passerror="Your password contain at least 8 character";
		$flag=0;
	}
	elseif(!preg_match("#[0-9]+#",$password))
	{
		$passerror="Your password contain at least 2 number";
		$flag=0;
	}
	
//phone 

if(empty($phone))
	{
		$moberror="You Forgot to enter Phone";
		$flag=0;	
	}
	elseif((!preg_match("#[0-9]+#",$phone)))
	{
			$moberror="Your mobile contain at least 10 number";
			$flag=0;
	}
	
	
if($flag!=1)
{
	header("location:dreg.php?nameerror=".$nameerror."&emlerror=".$emlerror."&passerror=".$passerror."&moberror=".$moberror."");
	
}
else 
{
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
	
	$qry="INSERT INTO donor_reg(name,email,password,phone) VALUES ('".$name."','".$email."','".$password."','".$phone."')";	
	
	if(mysql_query($qry,$con))
	{
		// echo "Data Inserted";
		header("location:donorlogin.php");
	}
	else
	{
	   // echo "Data not Inserted";
		header("location:dreg.php");
				
	}
	mysql_close();
}
?>


