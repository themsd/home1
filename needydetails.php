<!-- needy details -->

<div>
 <?php
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("mycharity");

			$result=mysql_query("select fname,mname,lname,eid,phno,amount,cardnumber,descrip,address from needy_reg");
		?>
	  
				<h1> Needy Details </h1>
				<table border="1">
				<tr><td>Needy name</td><td>Father name</td><td>Surname</td><td>Email</td><td>Phone</td><td>Amount</td><td>Card Number</td><td>Desciption</td><td>Address</td><td>Accpet Request</td><td>Cancel Request</td></tr>
	
     	
		<?php
			while($row=mysql_fetch_array($result))
			{
				?>
				<tr>
				<td><?php echo $row['fname'];?></td>
				<td><?php echo $row['mname'];?></td>
				<td><?php echo $row['lname'];?></td>
				<td><?php echo $row['eid'];?></td>
				<td><?php echo $row['phno'];?></td>
				<td><?php echo $row['amount'];?></td>
				<td><?php echo $row['cardnumber'];?></td>
				<td><?php echo $row['descrip'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><a href="adminpayment.php" target="_top">Accpet</a></td>
				<td><a href="message.php" target="_top">Cancel</a></td>
				</tr>
				<?php
			}
				?>
		</table>
