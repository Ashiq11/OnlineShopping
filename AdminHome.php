<?php
	require("menu2.php");
?>
<html>
	<head>
		<title>Friends And Family</title>
	</head>
	
	<body>
		<center>
			<input style = "height:30px; width:280px; background-color:green; color:white;" onclick="window.location.href='AddItem.php'" type ="submit" name = "Add_Product" size = "35" value = "Add Item"><br/><br/>
			<input style = "height:30px; width:280px; background-color:green;color:white;" onclick="window.location.href='EditItem.php'" type ="submit" name = "Edit_Product" size = "35" value = "Edit Item"><br/><br/>
			<input style = "height:30px; width:280px; background-color:green;color:white;" onclick="window.location.href='deleteItem.php'" type ="submit" name = "Remove_product" size = "35" value = "Remove Item"><br/><br/>
			<input style = "height:30px; width:280px; background-color:green;color:white;" onclick="window.location.href='#checkOrder.php'" type ="submit" name = "CheckOrder" size = "35" value = "Check Order"><br/><br/>
		</center>
	</body>
	<br/>
	<br/>
	<br/>
	<br/>
</html>


<?php
	require("footer.php");
?>