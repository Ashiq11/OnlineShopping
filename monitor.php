<?php
	require("menu.php");
	include("database.php");
	print_r($GLOBALS);
	
//SELECT * FROM iteam WHERE category="Men Fashion" and type="Formal Shirts";
$sql="SELECT * FROM iteam WHERE category='Computing and Gaming' and type='Monitors';";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);
$_SESSION["pid"]=$jsonData[1]["pid"];


?>


<?php 
require("home.css");
?>

<html>
	<head>
		<title>Friends And Family</title>
	</head>
	
		<body>
		<center>
			<table border="0" cellspacing="15">
				<tr>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" ><a href="Details.php"> <img src="<?php echo $jsonData[0]["image"];?>" alt="Mountain View" style="width:290px;height:230px;"></a></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[0]["brand"];?></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[0]["color"];?></td>
							</tr>
							<tr>
								<td colspan="3"><?php echo"TK ";echo $jsonData[0]["price"];?></td>
								<td colspan="2"><?php echo $jsonData[0]["discount"];echo"%";?></td>
							</tr>
							
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" ><a href="Details.php"> <img src="<?php echo $jsonData[0]["image"];?>" alt="Mountain View" style="width:290px;height:230px;"></a></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[0]["brand"];?></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[0]["color"];?></td>
							</tr>
							<tr>
								<td colspan="3"><?php echo"TK ";echo $jsonData[0]["price"];?></td>
								<td colspan="2"><?php echo $jsonData[0]["discount"];echo"%";?></td>
							</tr>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" ><a href="Details.php"> <img src="<?php echo $jsonData[0]["image"];?>" alt="Mountain View" style="width:290px;height:230px;"></a></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[0]["brand"];?></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[0]["color"];?></td>
							</tr>
							<tr>
								<td colspan="3"><?php echo"TK ";echo $jsonData[0]["price"];?></td>
								<td colspan="2"><?php echo $jsonData[0]["discount"];echo"%";?></td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" ><a href="Details.php"> <img src="<?php echo $jsonData[0]["image"];?>" alt="Mountain View" style="width:290px;height:230px;"></a></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[0]["brand"];?></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[0]["color"];?></td>
							</tr>
							<tr>
								<td colspan="3"><?php echo"TK ";echo $jsonData[0]["price"];?></td>
								<td colspan="2"><?php echo $jsonData[0]["discount"];echo"%";?></td>
							</tr>

						</table>
					</td>
				</tr>
				

						</table>
					</td>
				</tr>
				<tr>
					<td>
						
							<tr>
								
							</tr>

						</table>
					</td>
				
				</tr>
			</table>
		</center>
	
	</body>
	
	</br>
	</br></br></br></br></br></br></br></br>
	

	
</html>

<?php
include ("footer.php");
?>

