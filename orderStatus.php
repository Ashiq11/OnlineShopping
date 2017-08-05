<html>
<?php
	require("menu.php");
?>
	<body>
	<h3>ORDER STATUS: </h3>
	<hr/><br/>
	<center>
	<b style="color:blue">Welcome !</b><br/>
	<br/>Here you can easily check the status of your order.
	<br/>
	</center>
	<br/>
	<br/>
	<span><b>Creation Date: </b> 28-04-2017</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span><b>Payment Method: </b> BankDeposit</span>
	<br/>
	<br/>
	<br/>
	<table align="center" border="2" cellspacing="0"  cellpadding="10" style="width:100%">
		<tr>
			<td><b>PRODUCT NAME</b></td>
			<td><b>QUANTITY</b></td>
			<td><b>CURRENT STATUS</b></td>
		</tr>
		<tr>
			<td> Formal Shirt<br/>
			Size:L </td>
			<td>2</td>
			<td>28-04-2017<br/>
			item is being processed</td>
		</tr>
	</table>
	<br/>
	<br/>
	<center>
		<input type="submit" value="CHECK ANOTHER ORDER" onclick="window.location.href='FnF_Home.php'"  size="50" style="font-size:15pt;color:white;background-color:orange;">
	</center>
	</body>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php 
	require("footer.php");
	?>
</html>