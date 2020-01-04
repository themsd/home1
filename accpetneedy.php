		
<!-- accpeted needy payment -->

<div>
 <?php
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("mycharity");

			$result=mysql_query("select needyemail,cardnumber,amount,acc_date from admin_payment");
		?>
	  
				<h1> Accpeted Needy Payment Details </h1>
				<table border="1">
				<tr><td>Needy Email</td><td>Card number</td><td>Amount</td><td>Accpeted Date</td></tr>
	
     	
		<?php
			while($row=mysql_fetch_array($result))
			{
				?>
				<tr>
				<td><?php echo $row['needyemail'];?></td>
				<td><?php echo $row['cardnumber'];?></td>
				<td><?php echo $row['amount'];?></td>
				<td><?php echo $row['acc_date'];?></td>
				</tr>
				<?php
			}
				?>
</table>
