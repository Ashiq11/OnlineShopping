<?php
	require("menu.php");
	echo $_REQUEST["n"];
	print_r($GLOBALS);
?>
<html>
	<center><h1 style="color:blue">Thank You!<h1>
		<h3>Order#309025</h3>
		<p>
		We have received your order. If you need to confirm any information regarding your <br/>
		purchase, a FnF custmer service will call you shortly.Otherwise your order<br/> will be automatically confirmed.
		<div align="right"><input type="submit" value="Edit Account" onclick="window.location.href='editAccount.php'"  size="50" style="font-size:15pt;color:white;background-color:green;">
		</div>
		</p>
	</center>
	<hr/>
	<h3>TRACK YOUR ORDER: </h3><br/>
	<center>
	<p><b>You can track your order My Account > My Orders</b></p><br/>
	<input type="submit" value="My Orders" onclick="window.location.href='orders.php'"  size="50" style="font-size:15pt;color:white;background-color:orange;">
	</center>
	<hr/>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php 
	require("footer.php");
	?>
</html>
