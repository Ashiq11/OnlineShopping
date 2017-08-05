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
				Home And Living
				<table border = "0" cellspacing = "30">
					<tr>
						<td>
							<input type = "text" name = "id" placeholder = "Item Id"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "radio" name = "type" value = "Lighting">Lighting
							<input type = "radio" name = "type" value = "Bedding">Bedding
							<input type = "radio" name = "type" value = "Furniture">Furniture
							
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
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$id = $_POST['id'];
		$catagory = "Home And Living";
		$type = $_POST['type'];
		$brand = $_POST['brand'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$discount = $_POST['discount'];
		$size = $_POST['size'];
		$IName = $_POST['IName'];
		
		include("Insert.php");
	}
	
?>

<?php
	require("footer.php");
?>