	<center>	
<form method="POST" action="##">		
	<table>
	

	<tr>
		<td>Phone_no</td>
		<td><input type="text" name="phoneno"></td>
		<td><?php if(isset($_REQUEST['moberror'])){echo $_REQUEST['moberror'];}?></td>
	</tr>
	<tr>	
		<td>Income Certificate</td>
		<td><input type="text" name="phoneno"></td>
		<td><?php if(isset($_REQUEST['incerti'])){echo $_REQUEST['incerti'];}?></td>
	</tr>
	<tr>
		<td>Aadhar Card</td>
		<td><input type="text" name="aadhar"></td>
		<td><?php if(isset($_REQUEST['aadharerror'])){echo $_REQUEST['aadharerror'];}?></td>
		
	</tr>

	<tr>
		<td>Requirment/Need</td> 
		<td><textarea name="des" onfocus="this.value = '';" onblur="if (this.value == '')required=""></textarea></td>
		<td><?php if(isset($_REQUEST['reqerror'])){echo $_REQUEST['reqerror'];}?></td>
	</tr>

<br/>

<tr><td><button href="login.php">LOGIN</button></td>
<td><button href="needyreg.php">CANCEL</button></td><tr>

<!--<center><form action="reg.html">
<input type="submit" name="cancel" value=" Cancel "> 
</form></center>-->

</table>
</center>
</form>
