<?php 

$nemail=$_POST['email'];
$cardnumber=$_POST['cardnumber'];
$amount=$_POST['amount'];

/* echo $dname."<br>";
echo $email."<br>";
echo $cardnumber."<br>";
echo $amount."<br>";
*/


$flag=1;

/*
if(empty($dname))
{
		$nameerror="You Forgot to enter name";
		$flag=0;
}*/

//email
//email

if(empty($nemail))
{
		$emlerror="You Forgot to enter Email";
		$flag=0;	
}
elseif(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$nemail))
{
			$emlerror="You entered invalid email";
			$flag=0;
}

//card number_format
	if(empty($cardnumber))
	{
		$carderror="You Forgot to enter cardnumber";
		$flag=0;	
	}
	elseif((!preg_match("#[0-16]+#",$cardnumber))) 
	{
			$carderror="Your card number contain at least 16 number";
			$flag=0;
	}

//amount
if(empty($amount))
	{
		$amterror="You Forgot to enter amount";
		$flag=0;	
	}
	
//error pass	
if($flag!=1)
{
	header("location:adminpayment.php?emlerror=".$emlerror."&carderror=".$carderror."&amterror=".$amterror."");
	
}
else
{ 
	
$con=mysql_connect("localhost","root","");

mysql_select_db("mycharity");

if(isset($_POST['submit']))
{	
	

		if($nemail !=''||$cardnumber !=''||$amount !='')
		{
			$qry="INSERT INTO admin_payment(needyemail,cardnumber,amount,acc_date) VALUES ('".$nemail."','".$cardnumber."','".$amount."',CURDATE())";	
		}

		if(mysql_query($qry,$con))
		{
			$qry1="DELETE from needy_reg where eid='$nemail'";
			
			if(mysql_query($qry1,$con))
			{
				$qry2="UPDATE admin_account set balance = balance - $amount where acc_no='a01'";
				if(mysql_query($qry2,$con))
				{
					// echo "Data Inserted";
					header("location:adminhome1.php");

				}
			
			}
		}
		else
		{
			// echo "Data not Inserted";
			 header("location:adminpayment.php");
				
		}
}

	mysql_close();

}
?>