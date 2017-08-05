<?php
	require("menu.php");
?>

<html>
	<head>
		<title>Friends And Family
		</title>
	</head>
	
	<body>
		<center>
			<input type="button" value="Admin Home" onclick="window.location.href='AdminHome.php'" size="30" style="height:25px; width:100px; color:black;background-color:orange;"><br/><br/>
				
			<b>Catagory:</b>
			<table border = "0" cellspacing = "30">
				<tr>
					<td>
						<input style = "height:30px; width:150px; background-color:orange;" onclick="window.location.href='UMenFashion.php'" type ="button" name = "Men's Fashion" size = "35" value = "Men Fashion"><br/><br/>
					</td>
					<td>
						<input style = "height:30px; width:150px; background-color:orange;" onclick="window.location.href='UWomenFashion.php'" type ="button" name = "Women's Fashion" size = "35" value = "Women Fashion"><br/><br/>
					</td>
					<td>
						<input style = "height:30px; width:150px; background-color:orange;" onclick="window.location.href='UPhonesandTablets.php'" type ="button" name = "Phones and Tablets" size = "35" value = "Phones and Tablets"><br/><br/>
					</td>
					<td>
						<input style = "height:30px; width:150px; background-color:orange;" onclick="window.location.href='UHomeandLiving.php'" type ="button" name = "Home and Living" size = "35" value = "Home and Living"><br/><br/>
					</td>
					<td>
						<input style = "height:30px; width:150px; background-color:orange;" onclick="window.location.href='UComputingandGaming.php'" type ="button" name = "Computing and Gaming" size = "35" value = "Computing and Gaming"><br/><br/>
					</td>
					<td>
						<input style = "height:30px; width:150px; background-color:orange;" onclick="window.location.href='UOthers.php'" type ="button" name = "Others" size = "35" value = "Others"><br/><br/>
					</td>
					
				</tr>
			</table><br/><br/>
		</center>
	</body>
	<br/>
	<br/>
	<br/>
</html>

<?php
	require("footer.php");
?>