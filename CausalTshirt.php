<?php
	require("menu.php");
	include("database.php");
	//print_r($GLOBALS);
	
//SELECT * FROM iteam WHERE category="Men Fashion" and type="Formal Shirts";
$sql="SELECT * FROM iteam WHERE category='Men Fashion' and type='Casual Shirt';";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);
$_SESSION["pid"]=$jsonData[1]["pid"];


?>

<html>
	<head>
		<title>Friends And Family</title>
	</head>
	<div class="no" >
		<body>
		<center>
			<table style="width:100%" border="0" cellspacing="15">
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
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
								<td>XXL</td>
							</tr>

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
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
								<td>XXL</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" ><a href="Details.php"> <img src="<?php echo $jsonData[2]["image"];?>" alt="Mountain View" style="width:290px;height:230px;"></a></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[2]["brand"];?></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[2]["color"];?></td>
							</tr>
							<tr>
								<td colspan="3"><?php echo $jsonData[2]["price"];?></td>
								<td colspan="2"><?php echo $jsonData[2]["discount"];?></td>
							</tr>
							<tr>
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
								<td>XXL</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="causalTshirt_Pic/Tshirt4.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">WESTICS</td>
							</tr>
							<tr>
								<td colspan="5">Grey and Black color cotton T-shirt for men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 1040.00</td>
								<td colspan="2">-2%</td>
							</tr>
							<tr>
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
								<td>XXL</td>
							</tr>

						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="causalTshirt_Pic/Tshirt9.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">WESTICS</td>
							</tr>
							<tr>
								<td colspan="5">Green color cotton T-shirt for men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 1040.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>S</td>
								<td>M </td>
								<td>L</td>
								<td>XL</td>
								<td>XXL</td>
							</tr>

						</table>
					</td>
					<td>
						<<table border="0">
							<tr>
								<td colspan="5" > <img  src="causalTshirt_Pic/Tshirt8.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">addidas</td>
							</tr>
							<tr>
								<td colspan="5">Black color cotton T-shirt for men</td>
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
								<td>XXL</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="causalTshirt_Pic/Tshirt7.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">freeland</td>
							</tr>
							<tr>
								<td colspan="5">White and Bluecolor cotton T-shirt for men</td>
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
								<td>XXL</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="causalTshirt_Pic/Tshirt6.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">AARONG</td>
							</tr>
							<tr>
								<td colspan="5">Black color cotton T-shirt for men</td>
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
								<td>XXL</td>
							</tr>

						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="causalTshirt_Pic/Tshirt1.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Yellow</td>
							</tr>
							<tr>
								<td colspan="5">Black color cotton T-shirt for men</td>
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
								<td>XXL</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="causalTshirt_Pic/Tshirt6.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Yellow</td>
							</tr>
							<tr>
								<td colspan="5">Black color cotton T-shirt for men</td>
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
								<td>XXL</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="causalTshirt_Pic/Tshirt3.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Yellow</td>
							</tr>
							<tr>
								<td colspan="5">Black color cotton T-shirt for men</td>
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
								<td>XXL</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="causalTshirt_Pic/Tshirt6.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Yellow</td>
							</tr>
							<tr>
								<td colspan="5">Black color cotton T-shirt for men</td>
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
								<td>XXL</td>
							</tr>

						</table>
					</td>
				
				</tr>
			</table>
			
		</center>
	
	</body>
	</div>
	<style>.no{background-color:white;text-color:white;}</style>
	<br/>
	<br/>
	<br/>
	<br/>	
</html>

<?php
include ("footer.php");
?>

