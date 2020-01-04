		
<!-- show total payment  -->

<div>
 <?php
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("mycharity");

			$result=mysql_query("select acc_no,balance from admin_account");
		?>
	  
				<h1> Total Balance </h1>
				<table border="1">
				<tr><td>Account No</td><td>Balance</td></tr>
	
     	
		<?php
			while($row=mysql_fetch_array($result))
			{
				?>
				<tr>
				<td><?php echo $row['acc_no'];?></td>
				<td><?php echo $row['balance'];?></td>
				</tr>
				<?php
			}
				?>
</table>
		


