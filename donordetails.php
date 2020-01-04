
<div>


	   <?php
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("mycharity");

			$result=mysql_query("select dname,email,cardnumber,amount from d_payment");
		?>
	  
				<h1> Donor Details </h1>
				<table border="1">
				<tr><td>Donor name</td><td>Donor Email</td><td>Donor Card</td><td>Amount</td></tr>
	
     	
		<?php
			while($row=mysql_fetch_array($result))
			{
				?>
				<tr>
				<td><?php echo $row['dname'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['cardnumber'];?></td>
				<td><?php echo $row['amount'];?></td>
				</tr>
				<?php
			}
				?>
		</table>