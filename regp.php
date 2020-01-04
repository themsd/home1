<?php
$fname=$_POST['firstname'];
$mname=$_POST['middlename'];
$lname=$_POST['lastname'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$email=$_POST['email-id'];
$upload=$_POST['upload'];
$phone=$_POST['phoneno'];
$amount=$_POST['amount'];
$cardnumber=$_POST['cardnumber'];
$description=$_POST['des'];  
$address=$_POST['add']; 

/* echo $fname."<br>";
   echo $mname."<br>";
   echo $lname."<br>";
   echo $pass."<br>";
   echo $cpass."<br>";
   echo $email."<br>";
   echo $phone."<br>";
   echo $description."<br>";   
   echo $address."<br>"; 
*/

$flag=1;

//validation
	if(empty($fname))
	{
		$fsterror="You Forgot to enter Firstname";
		$flag=0;
	}
	//elseif(!preg_match("/^[a-zA-Z]*$/",$fname))
	//{
		//	$fsterror="Only letters allowed";
		//	$flag=0;
	//}
	

//middlename
	if(empty($mname))
	{
		$miderror="You Forgot to enter Middlename";
		$flag=0;
	}

	

//lastname
	if(empty($lname))
	{
		$lsterror="You Forgot to enter Lastname";
		$flag=0;
	}
	elseif(!preg_match("/^[a-zA-Z]*$/",$lname))
	{
			$lsterror="Only letters allowed";
			$flag=0;
	}
	

//password
	if(empty($pass))
	{
		$passerror="You Forgot to enter password";
		$flag=0;
	}
	elseif(strlen($pass)<8)
	{
		$passerror="Your password contain at least 8 character";
		$flag=0;
	}
	elseif(!preg_match("#[0-9]+#",$pass))
	{
		$passerror="Your password contain at least 2 number";
		$flag=0;
	}


//conform password

	if(empty($cpass))
	{
		$cpasserror="You Forgot to enter conform password";
		$flag=0;
	}
	elseif($pass!=$cpass)
	{
		$cpasserror="Password not match";
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

//upload


//if(empty($upload))
//{
	//	$uploaderror="You Forgot to select upload option";
	//	$flag=0;
//}	 



 //pdf upload
 $targetfolder = "Upload/";
 
 $p_report = $_FILES['filename']['name'];//get the name of the file that will be uploaded

 $targetfolder = $targetfolder . basename( $_FILES['filename']['name']) ;

 move_uploaded_file($_FILES['filename']['tmp_name'], $targetfolder);
 

//mobile
	if(empty($phone))
	{
		$moberror="You Forgot to enter Email";
		$flag=0;	
	}
	elseif((!preg_match("#[0-9]+#",$phone)))
	{
			$moberror="Your mobile contain at least 10 number";
			$flag=0;
	}
	
//amount
	if(empty($amount))
	{
		$amounterror="You Forgot to enter amount";
		$flag=0;	
	}
	elseif((!preg_match("#[0-9]+#",$amount)))
	{
		$amounterror="Enter only numbers";
		$flag=0;
	}
	
	
//description

	if(empty($description))
	{
		$deserror="You forgot enter description";
		$flag=0;
	}
	
////cardnumber
	if(empty($cardnumber))
	{
		$carderror="You forgot enter cardnumber";
		$flag=0;
	}	
	elseif((!preg_match("#[0-9]+#",$cardnumber)))
	{
			$carderror="Enter only numbers";
			$flag=0;
	}
	
	
	

//address
	if(empty($address))
	{
		$adderror="You forgot enter address";
		$flag=0;
	}

//error pass	
 if($flag!=1)
{
	header("location:reg.php?fsterror=".$fsterror."&miderror=".$miderror."&lsterror=".$lsterror."&passerror=".$passerror."&cpasserror=".$cpasserror."&emlerror=".$emlerror."&moberror=".$moberror."&amounterror=".$amounterror."&deserror=".$deserror."&carderror=".$carderror."&adderror=".$adderror."");
	
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
	
	//$result= " select acc_date from admin_payment where needyemail='$email'";
	
	$qry="INSERT INTO needy_reg(fname,mname,lname,Psw,cpsw,eid,upload,phno,amount,cardnumber,descrip,address,reg_date) VALUES 
	('".$fname."','".$mname."','".$lname."','".$pass."','".$cpass."','".$email."','".$upload."','".$phone."','".$amount."','".$cardnumber."','".$description."','".$address."',CURDATE())";	
	/*if(mysql_query($result,$con))
	{
		$row=mysql_fetch_array($result);
		$start  = new DateTime($row['acc_date']);
		$end 	= new DateTime(); // Current time and date
		$diff  	= $start->diff($end);
		$m=$diff->m;
		if( $m > 1)
		{*/
			if(mysql_query($qry,$con))
			{
				// echo "Data Inserted";
				header("location:login.html");
			}
			else
			{
				header("location:reg.php");
			}
		/*}
		else
		{
			header("location:reg.php");
		}
	}
	else
	{
		// echo "Data not Inserted";
		header("location:reg.php");
				
	}*/
	mysql_close();
}
?>




<?
/*
session_start();
$upload_flag=0;

$con=mysql_connect("localhost","root","");
mysql_select_db("mycharity");



//pdf upload
 $targetfolder = "Upload/";
 
 $p_report = $_FILES['filename']['name'];//get the name of the file that will be uploaded

 $targetfolder = $targetfolder . basename( $_FILES['filename']['name']) ;

	move_uploaded_file($_FILES['filename']['tmp_name'], $targetfolder);
?>
*/





