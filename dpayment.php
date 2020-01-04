<?php 
$dname=$_POST['dname'];
$email=$_POST['email'];
$cardnumber=$_POST['cardnumber'];
$amount=$_POST['amount'];

/* echo $dname."<br>";
echo $email."<br>";
echo $cardnumber."<br>";
echo $amount."<br>";
*/

$flag=1;

if(empty($dname))
{
		$nameerror="You Forgot to enter name";
		$flag=0;
}

//email
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

//card number_format
	if(empty($cardnumber))
	{
		$carderror="You Forgot to enter Email";
		$flag=0;	
	}
	elseif((!preg_match("#[0-16]+#",$cardnumber)))  /////
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
	header("location:payment.html?nameerror=".$nameerror."&emlerror=".$emlerror."&carderror=".$carderror."&amterror=".$amterror."");
	
}
else
{
	
$con=mysql_connect("localhost","root","");

mysql_select_db("mycharity");

if(isset($_POST['submit']))
{	
	

		if($dname !=''||$email !=''||$cardnumber !=''||$amount !='')
		{
			$qry="INSERT INTO d_payment(dname,email,cardnumber,amount) VALUES ('".$dname."','".$email."','".$cardnumber."','".$amount."')";	
		}

		if(mysql_query($qry,$con))
		{
			// echo "Data Inserted";
			$qry1="UPDATE admin_account set balance = balance + $amount where acc_no='a01'";
			if(mysql_query($qry1,$con))
			{
				header("location:success.php");
			}
			else
			{
				header("location:payment.html");
			}
		}
		else
		{
			// echo "Data not Inserted";
			 header("location:payment.html");
				
		}
}

	mysql_close();

}
?>