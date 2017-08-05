<?php
	session_start();
	require("menu.php");
?>

<html>
	<head>
		<title>Friends And Family
		</title>
	</head>
	
	<body>
		<center>
			<form method = "POST">
				<input type="button" value="Catagory" onclick="window.location.href='AddItem.php'" size="30" style="height:25px; width:100px; color:white;background-color:orange;"><br/><br/>
				Computing And Gaming
				<table border = "0" cellspacing = "30">
					<tr>
						<td>
							<input type = "text" name = "id" placeholder = "Item Id"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "radio" name = "type" value = "Monitors">Monitors
							<input type = "radio" name = "type" value = "Storage">Storage
							<input type = "radio" name = "type" value = "Laptops">Laptops
							<input type = "radio" name = "type" value = "Others">Others
							
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "text" name = "brand" placeholder = "Brand"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "text" name = "description" placeholder = "Description"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "number" name = "price" placeholder = "Price"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "number" name = "discount" placeholder = "Discount"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "text" name = "size" placeholder = "Size"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "text" name = "IName" placeholder = "Image Name"><br/><br/>
						</td>
					</tr>
					
				</table>
				<input type = "submit" value = "Insert" name = "insert" style="height:25px; width:150px; color:black; background-color:orange;"><br/><br/>
			</form>
		</center>
	</body>
</html>

<?php
	require("footer.php");
?>