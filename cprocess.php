<?php

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$message=$_POST['message'];

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
	
	$qry="INSERT INTO contact(name,email,contact,message) VALUES('".$name."','".$email."','".$contact."','".$message."')";	
	
	if(mysql_query($qry,$con))
	{
		// echo "Data Inserted";
		header("location:index.html");
	}
	else
	{
		 echo "Data not Inserted";
		// header("location:reg.php");
				
	}
	mysql_close();
?>