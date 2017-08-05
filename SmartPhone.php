<?php
	require("menu.php");
	
	include("database.php");
	print_r($GLOBALS);
	
//SELECT * FROM iteam WHERE category="Men Fashion" and type="Formal Shirts";
$sql="SELECT * FROM iteam WHERE category='Phone and Tablets' and type='Smart Phones';";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);
$_SESSION["pid"]=$jsonData[1]["pid"];


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
								<td colspan="3"><?php echo $jsonData[0]["price"];?></td>
								<td colspan="2"><?php echo $jsonData[0]["discount"];?></td>
							</tr>
							<tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" ><a href="Details.php"> <img src="<?php echo $jsonData[1]["image"];?>" alt="Mountain View" style="width:290px;height:230px;"></a></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[1]["brand"];?></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[1]["color"];?></td>
							</tr>
							<tr>
								<td colspan="3"><?php echo $jsonData[1]["price"];?></td>
								<td colspan="2"><?php echo $jsonData[1]["discount"];?></td>
							</tr>
							<tr>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Smartphone/SmartPhones/3.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">MI </td>
							</tr>
							
								<td colspan="3">Tk 21850.00</td>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Smartphone/SmartPhones/4.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">HTC</td>
							</tr>
							
							<tr>
								<td colspan="3">Tk 21040.00</td>
								
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Smartphone/SmartPhones/5.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">ASUS</td>
							</tr>
							
							<tr>
								<td colspan="3">Tk 22040.00</td>
								
							</tr>
							

						</table>
					</td>
					<td>
						<<table border="0">
							<tr>
								<td colspan="5" > <img  src="Smartphone/SmartPhones/6.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">SONY</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 47740.00</td>
								
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Smartphone/SmartPhones/7.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">LG </td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan="3">Tk 41840.00</td>
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Smartphone/SmartPhones/8.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Walton</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 11250.00</td>
								
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Smartphone/SmartPhones/9.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Panasonic</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 11190.00</td>
								
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Smartphone/SmartPhones/10.PNG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5"> Blackberry</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 56290.00</td>
								
							</tr>
							<tr>
								<
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Smartphone/SmartPhones/11.PNG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5"> Symphony</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3"> Tk 11340.00</td>
								
							</tr>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Smartphone/SmartPhones/12.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Nokia 6</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 32940.00</td>
								
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
				
				</tr>
			</table>
		</center>
	
	</body>
	
	

	
</html>

<?php
include ("footer.php");
?>

