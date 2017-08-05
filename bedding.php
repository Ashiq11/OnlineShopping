<?php
	require("menu.php");
	include("database.php");
	print_r($GLOBALS);
	
//SELECT * FROM iteam WHERE category="Men Fashion" and type="Formal Shirts";
$sql="SELECT * FROM iteam WHERE category='Home' and type='Bedding';";
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
	<div width=100% height=30px color="white"></div>
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
								<td colspan="3"><?php echo $jsonData[0]["price"];?></td>
								<td colspan="2"><?php echo $jsonData[0]["discount"];?></td>
							</tr>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Home/Bedding/2.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Bedding</td>
							</tr>
							
							<tr>
								<td colspan="3">Tk 11800.00</td>
								
							</tr>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Home/Bedding/3.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Bedding</td>
							</tr>
							
								<td colspan="3">Tk 15850.00</td>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Home/Bedding/4.jpg" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5"> Bedding</td>
							</tr>
							
							<tr>
								<td colspan="3">Tk 11040.00</td>
								
							</tr>
							<tr>
								
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

