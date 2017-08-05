<?php
	require("menu.php");
	include("database.php");
	//print_r($GLOBALS);
	//session_start();
	
//SELECT * FROM iteam WHERE category="Men Fashion" and type="Formal Shirts";
$sql="SELECT * FROM iteam WHERE category='Men Fashion' and type='Formal Shirts';";
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
						<div width=100% height=100% color="white">
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
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <a href="Details.php"><img  src="<?php echo $jsonData[1]["image"];?>" alt="Mountain View" style="width:290px;height:230px;"></td>
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
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <a href="Details.php"><img  src="<?php echo $jsonData[1]["image"];?>" alt="Mountain View" style="width:290px;height:230px;"></td>
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
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <a href="Details.php"><img  src="<?php echo $jsonData[1]["image"];?>" alt="Mountain View" style="width:290px;height:230px;"></td>
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
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
								
							</tr>
						</div>
						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_shirt/5.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">WESTICS</td>
							</tr>
							<tr>
								<td colspan="5">White Colour Formal Shirt for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 2040.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
							
							</tr>

						</table>
					</td>
					<td>
						<<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_shirt/6.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">addidas</td>
							</tr>
							<tr>
								<td colspan="5">Navy Blue Colour Formal Shirt for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 1740.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_shirt/7.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Freeland</td>
							</tr>
							<tr>
								<td colspan="5">Blue Colour Formal Shirt for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 840.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
							
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_shirt/8.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">AARONG</td>
							</tr>
							<tr>
								<td colspan="5"> Grey Colour Formal Shirt for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 850.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
							
							</tr>

						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_shirt/9.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Yellow</td>
							</tr>
							<tr>
								<td colspan="5">Puprle Colour Formal Shirt for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 900.00</td>
								<td colspan="2">-8%</td>
							</tr>
							<tr>
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
						
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_shirt/10.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Yellow</td>
							</tr>
							<tr>
								<td colspan="5"> Off white Colour Formal Shirt for Men</td>
							</tr>
							<tr>
								<td colspan="3">? 940.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
							
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_shirt/11.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Yellow</td>
							</tr>
							<tr>
								<td colspan="5">Magenta Colour Formal Shirt for Men</td>
							</tr>
							<tr>
								<td colspan="3">? 940.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
						
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_shirt/12.JPG"alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Yellow</td>
							</tr>
							<tr>
								<td colspan="5">White Colour Formal Shirt for Men</td>
							</tr>
							<tr>
								<td colspan="3">? 940.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
								
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

